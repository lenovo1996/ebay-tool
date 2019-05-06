<?php

	error_reporting(E_ERROR); ini_set('display_errors', 1);
	$proxy = require_once '../../session.php';

	require_once $sdk_dir . 'GetOrdersRequestType.php';
	$getordersrequest = new GetOrdersRequestType();

	$endDate = $_GET['end'] ?? null;
	$startDate = $_GET['start'] ?? null;

	if ($startDate) {
		$getordersrequest->setCreateTimeFrom($startDate . "T00:00:00.000Z");
	}
	if ($endDate) {
		$getordersrequest->setCreateTimeTo($endDate . "T00:00:00.000Z");
	}

	$pagination = new PaginationType();
	$getordersrequest->setPagination($pagination);
	$pagination->setEntriesPerPage("1000");

	$getordersrequest->setVersion("1101");
	$getordersrequest->setSortingOrder("Descending");
	$getordersrequest->addDetailLevel("ReturnAll");

	$response = $proxy->GetOrders($getordersrequest);

	$orders = [];
	foreach ($response->getOrderArray() as $rawOrder) {
		$order['id'] = $rawOrder->getOrderId();
		$order['status'] = $rawOrder->getOrderStatus();
		$order['shippingService'] = $rawOrder->getShippingDetails()->getShippingServiceOptions()[0]->getShippingService() ?? 'N/A';
		if ($rawOrder->getShippingDetails()->getShipmentTrackingDetails()) {
			$order['TrackingNumber'] = $rawOrder->getShippingDetails()->getShipmentTrackingDetails()[0]->getShipmentTrackingNumber() ?? 'N/A';
		} else {
			$order['TrackingNumber'] = 'N/A';
		}

		$order['saleRecord'] = $rawOrder->getShippingDetails()->getSellingManagerSalesRecordNumber();

		$order['paymentMethod'] = $rawOrder->getPaymentMethods()[0];
		$order['qty'] = $rawOrder->getTransactionArray()[0]->getQuantityPurchased();

		$item = $rawOrder->getTransactionArray()[0]->getItem();
		$order['item'] = [
			'title' => $item->getTitle(),
			'id' => $item->getItemId(),
			'conditionDisplayName' => $item->getConditionDisplayName(),
		];

		$order['total'] = $rawOrder->getTransactionArray()[0]->getTransactionPrice()->value . ' ' . ($rawOrder->getTransactionArray()[0]->getTransactionPrice()->attributeValues['currencyID'] ?? 'USD');
		$order['transactionId'] = $rawOrder->getTransactionArray()[0]->getTransactionId();
		$order['PaidTime'] = $rawOrder->getPaidTime();
		$order['ShippedTime'] = $rawOrder->getShippedTime();
		$order['BuyerUserID'] = $rawOrder->getBuyerUserId();
		$order['buyerName'] = $rawOrder->getTransactionArray()[0]->getBuyer()->getUserFirstName() . ' ' . $rawOrder->getTransactionArray()[0]->getBuyer()->getUserLastName();

		$orders[] = $order;
	}
	echo json_encode($orders);

