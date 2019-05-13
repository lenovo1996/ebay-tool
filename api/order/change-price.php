<?php

	$proxy = require_once '../../session_trading.php';

	$price = $_GET['price'];
	$itemId = $_GET['itemId'];
	$sku = $_GET['sku'];

	require_once $sdk_dir . '/trading/ReviseInventoryStatusRequestType.php';
	$reviseinventorystatusrequest = new ReviseInventoryStatusRequestType();
	$inventorystatus = new InventoryStatusType();
	$reviseinventorystatusrequest->addInventoryStatus($inventorystatus);
	$inventorystatus->setItemID($itemId);
	if (!empty($sku)) {
		$inventorystatus->setSKU($sku);
	}
	$amount = new AmountType();
	$inventorystatus->setStartPrice($amount);
	$amount->setTypeValue($price);
	$reviseinventorystatusrequest->setVersion("1101");

	$response = $proxy->ReviseInventoryStatus($reviseinventorystatusrequest);

	echo json_encode($response);