<?php

	error_reporting(1);
	ini_set('display_errors', 1);

	$proxy = require_once '../../session.php';

	$itemId = $_GET['itemId'];
	$variation = json_decode($_GET['variation'], true);

	$keys = [];
	$values = [];
	foreach ($variation as $key => $value) {
		$keys[] = $key;
		$values[] = $value;
	}

	require_once $sdk_dir . 'GetItemRequestType.php';
	$getitemrequest = new GetItemRequestType();
	$getitemrequest->setItemID($itemId);
	$getitemrequest->setVersion("1101");

	$response = $proxy->GetItem($getitemrequest);

	$quanity = 0;
	$quanitySold = 0;

	if ($response->Item->Variations) {
		foreach ($response->Item->Variations->Variation as $variations) {
			$VariationSpecifics = $variations->VariationSpecifics;
			if (array_search($VariationSpecifics[0]->Name, $keys) === false || array_search($VariationSpecifics[1]->Value[0], $values) === false) {
				continue;
			}

			$quanity = $variations->Quantity;
			$quanitySold = $variations->SellingStatus->QuantitySold;
			$SKU = $variations->SKU;
			break;
		}
	} else {
		$quanity = $response->Item->Quantity;
		$quanitySold = $response->Item->SellingStatus->QuantitySold;
		$SKU = $response->Item->SKU;
	}



	echo json_encode([
		'quantity' => $quanity - $quanitySold,
		'SKU' => $SKU
	]);