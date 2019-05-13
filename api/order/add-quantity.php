<?php

	$proxy = require_once '../../session_trading.php';

	$quanity = $_GET['quantity'];
	$itemId = $_GET['itemId'];
	$sku = $_GET['sku'];


	require_once $sdk_dir . '/trading/ReviseInventoryStatusRequestType.php';
	$reviseinventorystatusrequest = new ReviseInventoryStatusRequestType();
	$inventorystatus = new InventoryStatusType();
	$reviseinventorystatusrequest->addInventoryStatus($inventorystatus);
	$inventorystatus->setItemID($itemId);
	$inventorystatus->setQuantity($quanity);
	if (!empty($sku)) {
		$inventorystatus->setSKU($sku);
	}
	$reviseinventorystatusrequest->setVersion("1101");

	$response = $proxy->ReviseInventoryStatus($reviseinventorystatusrequest);

	echo json_encode($response);