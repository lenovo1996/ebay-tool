<?php

	error_reporting(1);
	ini_set('display_errors', 1);

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
		$itemDetail = getItemDetail($returnOrder['itemId']);
        var_dump($itemDetail);
		$returnId = $return->ReturnId->id;
		$returnOrder['id'] = $returnId;
		$returnOrder['status'] = $return->status;
		$returnOrder['creationDate'] = $return->creationDate;
		$returnOrder['type'] = $return->ReturnType;
		$returnOrder['buyer'] = $return->otherParty->userId;
		$returnOrder['itemQty'] = $return->returnRequest->returnItem[0]->returnQuantity;
		$returnOrder['itemTransaction'] = $return->returnRequest->returnItem[0]->transactionId;
		$returnOrder['reason'] = $return->returnRequest->comments;
		$returnOrder['itemTitle'] = $itemDetail->Item->Title;

		$returnList[] = $returnOrder;
	}

	echo json_encode($returnList);

	function getItemDetail($itemId)
	{
		$proxyTrading = require_once '../../session_trading.php';
		$getitemrequest = new GetItemRequestType();
		$getitemrequest->setItemID($itemId);
		$getitemrequest->setVersion("1101");

		$response = $proxyTrading->GetItem($getitemrequest);
		return $response;
	}


	function returnDetail($returnId, $proxy)
	{
		$returnDetail = new getReturnDetailRequest();

		$returnIdType = new ReturnIdType();
		$returnIdType->setid($returnId);

		$returnDetail->setReturnId($returnIdType);

		$response = $proxy->getReturnDetail($returnDetail);

		return $response;
	}