<?php

	$proxy = require_once '../../session_trading.php';

	require_once $sdk_dir . '/trading/GetMyMessagesRequestType.php';
	require_once $sdk_dir . '/trading/ReviseMyMessagesRequestType.php';


	$revisemymessagesrequest = new ReviseMyMessagesRequestType();
	$revisemymessagesrequest->setFolderID("0");
	$mymessagesmessageidarray = new MyMessagesMessageIDArrayType();
	$revisemymessagesrequest->setMessageIDs($mymessagesmessageidarray);
	$mymessagesmessageidarray->addMessageID($_GET['id']);
	$revisemymessagesrequest->setRead("true");
	$revisemymessagesrequest->setVersion("1101");

	$response = $proxy->ReviseMyMessages($revisemymessagesrequest);


	$getmymessagesrequest = new GetMyMessagesRequestType();

	$getmymessagesrequest->setFolderID("0");
	$mymessagesmessageidarray = new MyMessagesMessageIDArrayType();
	$getmymessagesrequest->setMessageIDs($mymessagesmessageidarray);
	$mymessagesmessageidarray->addMessageID($_GET['id']);
	$getmymessagesrequest->addDetailLevel("ReturnMessages");
	$getmymessagesrequest->setVersion("1101");

	$response = $proxy->GetMyMessages($getmymessagesrequest);

	$messageObj = $response->getMessages()[0];

	$message = [];
	$message['sender'] = $messageObj->getSender();
	$message['RecipientUserID'] = $messageObj->getRecipientUserId();
	$message['receiveDate'] = $messageObj->getReceiveDate();
	$message['id'] = $messageObj->getMessageId();
	$message['externalMessageID'] = $messageObj->getExternalMessageId();
	$message['subject'] = $messageObj->getSubject();
	$message['text'] = $messageObj->getText();

	echo json_encode($message);