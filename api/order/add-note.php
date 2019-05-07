<?php

	$orderId = $_POST['orderId'];
	$itemId = $_POST['itemId'];
	$noteContent = $_POST['noteContent'];

	$proxy = require_once '../../session.php';

	require_once $sdk_dir . 'SetUserNotesRequestType.php';
	$setusernotesrequest = new SetUserNotesRequestType();
	$setusernotesrequest->setAction("AddOrUpdate");
	$setusernotesrequest->setItemID($itemId);
	$setusernotesrequest->setNoteText($noteContent);
	$setusernotesrequest->setOrderLineItemID($orderId);
	$setusernotesrequest->setVersion("1101");

	$response = $proxy->SetUserNotes($setusernotesrequest);

	echo json_encode($response);