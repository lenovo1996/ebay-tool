<?php

	$proxy = require_once '../../session.php';

	$quanity = $_GET['quantity'];
	$itemId = $_GET['itemId'];
	$sku = $_GET['sku'];


	require_once $sdk_dir . 'ReviseInventoryStatusRequestType.php';
	$reviseinventorystatusrequest = new ReviseInventoryStatusRequestType();
	$inventorystatus = new InventoryStatusType();
	$reviseinventorystatusrequest->addInventoryStatus($inventorystatus);
	$inventorystatus->setItemID($itemId);
	$inventorystatus->setQuantity($quanity);
	$inventorystatus->setSKU($sku);
	$reviseinventorystatusrequest->setVersion("1101");

	$response = $proxy->ReviseInventoryStatus($reviseinventorystatusrequest);

	echo json_encode($response);