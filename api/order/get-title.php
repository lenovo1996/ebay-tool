<?php

	error_reporting(1);
	ini_set('display_errors', 1);

	$proxy = require_once '../../session_trading.php';

	$itemId = $_GET['itemId'];

	require_once $sdk_dir . '/trading/GetItemRequestType.php';
	$getitemrequest = new GetItemRequestType();
	$getitemrequest->setItemID($itemId);
	$getitemrequest->setVersion("1101");

	$response = $proxy->GetItem($getitemrequest);

	$title = $response->Item->Title;



	echo json_encode([
		'title' => $title
	]);