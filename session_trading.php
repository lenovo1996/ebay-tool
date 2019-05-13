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

	require_once $sdk_dir . '/trading/EbatNs_Session.php';
	require_once $sdk_dir . '/trading/EbatNs_ServiceProxy.php';
	require_once $sdk_dir . '/trading/EbatNs_DataConverter.php';

	$token = '';
    if (isset($_SESSION['token'])) {
        $token = $_SESSION['token'];
    }

	$session = new EbatNs_Session();
	$session->setSiteId(0);
	$session->setUseHttpCompression(1);
	$session->setAppMode(0);
	$session->setDevId('	f3338f86-b407-4a7a-baff-adcf74800f2c');
	$session->setAppId('LPhi-APIEba-PRD-4ed499e41-3f0a1858');
	$session->setCertId('PRD-ed499e41f3ab-57bd-4472-b204-dc85');
	$session->setAuthType(EBAY_AUTHTYPE_AUTHNAUTH);
	$session->setRequestToken($token);
	$session->setTokenUsePickupFile(false);
	$session->setTokenMode(true);

	$proxy = new EbatNs_ServiceProxy($session, 'EbatNs_DataConverterUtf8');

	return $proxy;