<?php

	$proxy = require_once '../../session.php';

	require_once $sdk_dir . 'CompleteSaleRequestType.php';

	$completesalerequest = new CompleteSaleRequestType();

	$completesalerequest->setOrderID("173862158459-2007827284007");
	$completesalerequest->setShipped("true");
	$completesalerequest->setTransactionID("2007827284007");
	$completesalerequest->setVersion("1101");

	$response = $proxy->CompleteSale($completesalerequest);

