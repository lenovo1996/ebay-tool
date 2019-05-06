<?php

	$orderId = $_GET['order_id'];

	list($itemId, $transactionId) = explode('-', $orderId);

	$proxy = require_once '../../session.php';

	require_once $sdk_dir . 'GetOrderTransactionsRequestType.php';

	$getordertransactionsrequest = new GetOrderTransactionsRequestType();

	$getordertransactionsrequest->setIncludeFinalValueFees("true");
	$itemtransactionidarray = new ItemTransactionIDArrayType();
	$getordertransactionsrequest->setItemTransactionIDArray($itemtransactionidarray);
	$itemtransactionid = new ItemTransactionIDType();
	$itemtransactionidarray->addItemTransactionID($itemtransactionid);
	$itemtransactionid->setItemID($itemId);
	$itemtransactionid->setTransactionID($transactionId);
	$orderidarray = new OrderIDArrayType();
	$getordertransactionsrequest->setOrderIDArray($orderidarray);
	$orderidarray->addOrderID($orderId);
	$getordertransactionsrequest->addDetailLevel("ReturnAll");
	$getordertransactionsrequest->setVersion("1101");

	$response = $proxy->GetOrderTransactions($getordertransactionsrequest);