<?php

	$proxy = require_once '../../session.php';


	$endDate = !empty($_GET['end']) ? $_GET['end'] : date('Y-m-d');
	$startDate = !empty($_GET['start']) ? $_GET['start'] : date('Y-m-d', time() - 60 * 60 * 24 * 7);
	$buyerUserName = $_GET['buyerUserName'];
	$waitingShipment = $_GET['waitingShipment'];
	$blankTracking = $_GET['blankTracking'];
	$page = !empty($_GET['page']) ? $_GET['page'] : 1;

	// ---------------------------------------
	require_once $sdk_dir . 'GetOrdersRequestType.php';
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
	require_once $sdk_dir . 'GetMyeBaySellingRequestType.php';
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
		'current' => $page,
		'page' => $response->getPaginationResult()->getTotalNumberOfPages(),
		'total' => $response->getPaginationResult()->getTotalNumberOfEntries(),
		'list' => []
	];


	foreach ($response->getOrderArray() as $rawOrder) {
		// filter by user name
		if (!empty($buyerUserName) && $rawOrder->getBuyerUserId() != $buyerUserName) {
			continue;
		}

		// filter by waiting shipment
		if ($waitingShipment == 'true' && (!is_null($rawOrder->getShippedTime()) || $rawOrder->getOrderStatus() == 'Cancelled')) {
			continue;
		}

		// set tracking number and filter by tracking number
		if ($rawOrder->getTransactionArray()[0]->getShippingDetails()->getShipmentTrackingDetails()) {
			$order['TrackingNumber'] = $rawOrder->getTransactionArray()[0]->getShippingDetails()->getShipmentTrackingDetails()[0]->getShipmentTrackingNumber();
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
		$order['qty'] = $rawOrder->getTransactionArray()[0]->getQuantityPurchased();

		$item = $rawOrder->getTransactionArray()[0]->getItem();

		$variations = [];

		$variationList = $rawOrder->getTransactionArray()[0]->Variation;
		if (!is_null($variationList)) {
			foreach ($variationList->VariationSpecifics as $variation) {
				$name = str_replace("'", "&apos;", $variation->Name);
				$value = str_replace("'", "&apos;", $variation->Value[0]);
				$variations[$name] = $value;
			}
		}

		$order['item'] = [
			'title' => $item->getTitle(),
			'image' => 'https://thumbs4.ebaystatic.com/pict/' . $item->getItemId() . '8080_1.jpg',
			'id' => $item->getItemId(),
			'variation' => $variations,
			'sku' => $rawOrder->getTransactionArray()[0]->Variation->SKU,
		];

		$order['note'] = $notes[$item->getItemId() . '-' . $rawOrder->getBuyerUserId()];
		$order['total'] = $rawOrder->getTransactionArray()[0]->getTransactionPrice()->value . ' ' . ($rawOrder->getTransactionArray()[0]->getTransactionPrice()->attributeValues['currencyID'] ?? 'USD');
		$order['transactionId'] = $rawOrder->getTransactionArray()[0]->getTransactionId();
		$order['PaidTime'] = $rawOrder->getPaidTime();
		$order['ShippedTime'] = $rawOrder->getShippedTime();
		$order['BuyerUserID'] = $rawOrder->getBuyerUserId();
		$order['buyerName'] = $rawOrder->getTransactionArray()[0]->getBuyer()->getUserFirstName() . ' ' . $rawOrder->getTransactionArray()[0]->getBuyer()->getUserLastName();

		$orders['list'][$order['saleRecord']] = $order;
	}

	echo json_encode($orders);

