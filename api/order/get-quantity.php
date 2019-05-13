<?php

	error_reporting(1);
	ini_set('display_errors', 1);

	$proxy = require_once '../../session_trading.php';

	$itemId = $_GET['itemId'];
	$sku = $_GET['sku'];

	$keys = [];
	$values = [];
	foreach ($variation as $key => $value) {
		$keys[] = $key;
		$values[] = $value;
	}

	require_once $sdk_dir . '/trading/GetItemRequestType.php';
	$getitemrequest = new GetItemRequestType();
	$getitemrequest->setItemID($itemId);
	if(!empty($sku)) {
		$getitemrequest->setVariationSKU($sku);
	}
	$getitemrequest->setVersion("1101");

	$response = $proxy->GetItem($getitemrequest);

	$quanity = $response->Item->Quantity;
	$quanitySold = $response->Item->SellingStatus->QuantitySold;



	echo json_encode([
		'quantity' => $quanity - $quanitySold
	]);