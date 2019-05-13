<?php

	error_reporting(1);
	ini_set('display_errors', 1);

	$proxy = require_once '../../session_return.php';

	require_once $sdk_dir . '/return/getReturnDetailRequest.php';

	$returnDetail = new getReturnDetailRequest();

	$returnId = new ReturnIdType();
	$returnId->setid(5113764781);


	$returnDetail->setReturnId($returnId);


	$response = $proxy->getReturnDetail($returnDetail);

	var_dump($response);