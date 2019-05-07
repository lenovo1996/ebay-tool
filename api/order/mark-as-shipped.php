<?php

	$orderId = $_GET['order_id'];
	$transactionId = $_GET['transaction_id'];
	$shippedStatus = $_GET['status'];

	$proxy = require_once '../../session.php';

	require_once $sdk_dir . 'CompleteSaleRequestType.php';

	$completesalerequest = new CompleteSaleRequestType();

	$completesalerequest->setOrderID($orderId);
	$completesalerequest->setShipped($shippedStatus);
	$completesalerequest->setTransactionID($transactionId);
	$completesalerequest->setVersion("1101");

	$response = $proxy->CompleteSale($completesalerequest);

	echo json_encode($response);

