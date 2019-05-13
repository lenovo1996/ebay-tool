<?php

	$orderId = $_POST['orderId'];
	$itemId = $_POST['itemId'];
	$noteContent = $_POST['noteContent'];
	$sku = $_POST['sku'];

	$proxy = require_once '../../session_trading.php';

	require_once $sdk_dir . '/trading/SetUserNotesRequestType.php';
	$setusernotesrequest = new SetUserNotesRequestType();
	$setusernotesrequest->setAction("AddOrUpdate");
	$setusernotesrequest->setItemID($itemId);
	if (!empty($sku)) {
		$setusernotesrequest->setSKU($sku);
	}
	$setusernotesrequest->setNoteText($noteContent);
	$setusernotesrequest->setOrderLineItemID($orderId);
	$setusernotesrequest->setVersion("1101");

	$response = $proxy->SetUserNotes($setusernotesrequest);

	echo json_encode($response);