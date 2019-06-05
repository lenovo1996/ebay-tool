<?php
    error_reporting(null); ini_set('display_errors', false);
	$proxy = require_once '../../session_return.php';
	require_once $sdk_dir . '/trading/GetItemRequestType.php';
	require_once $sdk_dir . '/return/getUserReturnsRequest.php';
	require_once $sdk_dir . '/return/getReturnDetailRequest.php';

	$getUserReturnRequest = new getUserReturnsRequest();

	$createRangeDate = new DateRangeFilterType();
	$createRangeDate->setfromDate(date('Y-m-d', time() - 60 * 60 * 24 * 20) . "T00:00:00.000Z");
	$createRangeDate->settoDate(date('Y-m-d') . "T00:00:00.000Z");
	$getUserReturnRequest->setcreationDateRangeFilter($createRangeDate);


	$returnStatusFilter = new ReturnStatusFilterType();
	$returnStatusFilter->setReturnStatus('RETURN_STARTED');
	$getUserReturnRequest->setReturnStatusFilter($returnStatusFilter);


	$response = $proxy->getUserReturns($getUserReturnRequest);


	$returnList = [];
	foreach ($response->returns as $return) {
		$returnOrder = [];

        $returnOrder['itemId'] = $return->returnRequest->returnItem[0]->itemId;
		$returnDetail = returnDetail($returnId, $proxy);
		$returnId = $return->ReturnId->id;
		$returnOrder['id'] = $returnId;
		$returnOrder['status'] = $return->status;
		$returnOrder['creationDate'] = $return->creationDate;
		$returnOrder['type'] = $return->ReturnType;
		$returnOrder['buyer'] = $return->otherParty->userId;
		$returnOrder['itemQty'] = $return->returnRequest->returnItem[0]->returnQuantity;
		$returnOrder['itemTransaction'] = $return->returnRequest->returnItem[0]->transactionId;
		$returnOrder['reason'] = $return->returnRequest->comments;

		$returnList[] = $returnOrder;
	}

	echo json_encode($returnList);

	function returnDetail($returnId, $proxy)
	{
		$returnDetail = new getReturnDetailRequest();

		$returnIdType = new ReturnIdType();
		$returnIdType->setid($returnId);

		$returnDetail->setReturnId($returnIdType);

		$response = $proxy->getReturnDetail($returnDetail);

		return $response;
	}