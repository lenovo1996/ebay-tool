<?php
	ini_set('max_execution_time ', 0);
	header('Content-type: application/json');
	session_start();
	if (!$_SESSION['userDir']) {
		echo json_encode([
			'result' => false,
			'msg' => 'Chưa đăng nhập'
		]);
		die;
	}

	$sdk_dir = $_SERVER["DOCUMENT_ROOT"] . '/sdk/';

	require_once $sdk_dir . '/return/EbatNsReturnManagement_Session.php';
	require_once $sdk_dir . '/return/EbatNsReturnManagement_ServiceProxy.php';
	require_once $sdk_dir . '/return/EbatNsReturnManagement_DataConverter.php';

	$token = '';
	if (isset($_SESSION['token'])) {
		$token = $_SESSION['token'];
	}

	$session = new EbatNsReturnManagement_Session();
	$session->setUseHttpCompression(1);
	$session->setAppMode(0);
	$session->setRequestToken($token);
	$session->setTokenUsePickupFile(false);
	$session->setTokenMode(true);

	$proxy = new EbatNsReturnManagement_ServiceProxy($session, 'EbatNsReturnManagement_DataConverter');

	return $proxy;