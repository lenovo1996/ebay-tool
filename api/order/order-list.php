<?php
    error_reporting(null); ini_set('display_errors', 0);
	$proxy = require_once '../../session_trading.php';

	$endDate = !empty($_GET['end']) ? $_GET['end'] : date('Y-m-d');
	$startDate = !empty($_GET['start']) ? $_GET['start'] : date('Y-m-d', time() - 60 * 60 * 24 * 3);
	$buyerUserName = $_GET['buyerUserName'] ?? null;
	$waitingShipment = $_GET['waitingShipment'] ?? null;
	$blankTracking = $_GET['blankTracking'] ?? null;
	$page = !empty($_GET['page']) ? $_GET['page'] : 1;

	// ---------------------------------------
	require_once $sdk_dir . '/trading/GetOrdersRequestType.php';
	$getordersrequest = new GetOrdersRequestType();

	if ($startDate) {
		$getordersrequest->setCreateTimeFrom($startDate . "T00:00:00.000Z");
	}
	if ($endDate) {
		$getordersrequest->setCreateTimeTo($endDate . "T23:59:59.000Z");
	}

	$pagination = new PaginationType();
	$getordersrequest->setPagination($pagination);
	$pagination->setEntriesPerPage("1000");

	$getordersrequest->setVersion("1101");
	$getordersrequest->setSortingOrder("Descending");
	$pagination->setEntriesPerPage("200");
	$pagination->setPageNumber($page);
	$getordersrequest->addDetailLevel("ReturnAll");

	$response = $proxy->GetOrders($getordersrequest);

	// ---------------------------------------
	require_once $sdk_dir . '/trading/GetMyeBaySellingRequestType.php';
	$getmyebaysellingrequest = new GetMyeBaySellingRequestType();
	$getmyebaysellingrequest->setHideVariations("true");
	$itemlistcustomization = new ItemListCustomizationType();
	$getmyebaysellingrequest->setSoldList($itemlistcustomization);
	$itemlistcustomization->setIncludeNotes("true");
	$pagination = new PaginationType();
	$pagination->setEntriesPerPage("200");
	$itemlistcustomization->setPagination($pagination);
	$getmyebaysellingrequest->addDetailLevel("ReturnSummary");
	$getmyebaysellingrequest->setVersion("1101");

	$response2 = $proxy->GetMyeBaySelling($getmyebaysellingrequest);

	// -------------------------------------------
	$notes = [];
	foreach ($response2->getSoldList()->getOrderTransactionArray() as $rawItem) {
		$note = $rawItem->getTransaction()->Item->PrivateNotes;
		$id = $rawItem->getTransaction()->Item->ItemID;
		$notes[$id . '-' . $rawItem->getTransaction()->Buyer->UserID] = $note;
	}
	// -------------------------------------------

	$orders = [
        'seller' => $response->getOrderArray()[0]->SellerUserID,
		'current' => $page,
		'page' => $response->getPaginationResult()->getTotalNumberOfPages(),
		'total' => $response->getPaginationResult()->getTotalNumberOfEntries(),
		'list' => []
	];

	require_once $sdk_dir . '/trading/ReviseFixedPriceItemRequestType.php';

	foreach ($response->getOrderArray() as $rawOrder) {
		// filter by user name
		if (!empty($buyerUserName) && $rawOrder->getBuyerUserId() != $buyerUserName) {
			continue;
		}

		// filter by waiting shipment
		if ($waitingShipment == 'true') {
			if ($rawOrder->getOrderStatus() == 'Cancelled') {
				continue;
			}

			if (!is_null($rawOrder->getShippedTime())) {
				continue;
			}
		}

		foreach ($rawOrder->getTransactionArray() as $key => $transactionArr) {
            // set tracking number and filter by tracking number
            if ($transactionArr->getShippingDetails()->getShipmentTrackingDetails()) {
                $order['TrackingNumber'] = $transactionArr->getShippingDetails()->getShipmentTrackingDetails()[0]->getShipmentTrackingNumber();
            } else {
                $order['TrackingNumber'] = 'N/A';
            }

            if ($blankTracking == 'true' && $order['TrackingNumber'] != 'N/A') {
                continue;
            }

            $order['id'] = $rawOrder->getOrderId();
            $order['status'] = $rawOrder->getOrderStatus();
            $order['shippingService'] = $rawOrder->getShippingDetails()->getShippingServiceOptions()[0]->getShippingService() ?? 'N/A';


            $order['saleRecord'] = $rawOrder->getShippingDetails()->getSellingManagerSalesRecordNumber();

            $order['paymentMethod'] = $rawOrder->getPaymentMethods()[0];
            $order['qty'] = $transactionArr->getQuantityPurchased();

            $item = $transactionArr->getItem();

            $variations = [];

            $variationList = $transactionArr->Variation;
            if (!is_null($variationList)) {
                foreach ($variationList->VariationSpecifics as $variation) {
                    $name = str_replace("'", "&apos;", $variation->Name);
                    $value = str_replace("'", "&apos;", $variation->Value[0]);
                    $variations[$name] = $value;
                }
            }

            // set SKU cho những item có variations và chưa có variation sku
            if (!is_null($variationList) && empty($transactionArr->Variation->SKU)) {
                $generateSku = 'Lephi_' . substr(md5(rand(1, 1000000)), 0, 5);
                $revisefixedpriceitemrequest = new ReviseFixedPriceItemRequestType();
                $fixedPriceItem = new ItemType();
                $revisefixedpriceitemrequest->setItem($fixedPriceItem);
                $fixedPriceItem->setItemID($item->getItemId());
                $fixedPriceVariations = new VariationsType();
                $fixedPriceItem->setVariations($fixedPriceVariations);
                $fixedPriceVariation = new VariationType();
                $fixedPriceVariations->addVariation($fixedPriceVariation);
                $fixedPriceVariation->setDelete("false");
                $fixedPriceVariation->setSKU($generateSku);

                $namevaluelistarray = new NameValueListArrayType();
                $fixedPriceVariation->setVariationSpecifics($namevaluelistarray);

                foreach ($variations as $key => $value) {
                    $namevaluelist = new NameValueListType();
                    $namevaluelistarray->addNameValueList($namevaluelist);
                    $name = str_replace("&apos;", "'", $key);
                    $value = str_replace("&apos;", "'", $value);
                    $namevaluelist->setName($name);
                    $namevaluelist->addValue($value);
                }

                $revisefixedpriceitemrequest->setVersion("1101");
                $response22 = $proxy->ReviseFixedPriceItem($revisefixedpriceitemrequest);
            }

            $order['item'] = [
                'title' => $item->getTitle(),
                'image' => 'https://thumbs4.ebaystatic.com/pict/' . $item->getItemId() . '8080_1.jpg',
                'id' => $item->getItemId(),
                'variation' => $variations,
                'sku' => $transactionArr->Variation->SKU,
            ];

            $order['note'] = $notes[$item->getItemId() . '-' . $rawOrder->getBuyerUserId()];
            $order['total'] = $transactionArr->getTransactionPrice()->value . ' ' . ($transactionArr->getTransactionPrice()->attributeValues['currencyID'] ?? 'USD');
            $order['transactionId'] = $transactionArr->getTransactionId();
            $order['PaidTime'] = $rawOrder->getPaidTime();
            $order['ShippedTime'] = $rawOrder->getShippedTime();
            $order['BuyerUserID'] = $rawOrder->getBuyerUserId();
            $order['buyerName'] = $transactionArr->getBuyer()->getUserFirstName() . ' ' . $transactionArr->getBuyer()->getUserLastName();

            $orders['list'][$order['saleRecord'] + $key] = $order;
        }
  
	}

	echo json_encode($orders);

