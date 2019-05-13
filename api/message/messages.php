<?php
	$proxy = require_once '../../session_trading.php';

	require_once $sdk_dir . '/trading/GetMyMessagesRequestType.php';

	$endDate = $_GET['end'] ?? null;
	$startDate = $_GET['start'] ?? null;

	$myMessageRequest = new GetMyMessagesRequestType();

	if ($endDate) {
		$myMessageRequest->setEndTime($endDate . "T00:00:00.000Z");
	}
	if ($startDate) {
		$myMessageRequest->setStartTime($startDate . "T00:00:00.000Z");

	}

	$myMessageRequest->setVersion("1101");
	$myMessageRequest->setFolderID("0");
	$myMessageRequest->addDetailLevel("ReturnHeaders");
	$myMessageRequest->addOutputSelector("Messages.Message.Subject");
	$myMessageRequest->addOutputSelector("Messages.Message.Sender");
	$myMessageRequest->addOutputSelector("Messages.Message.ItemID");
	$myMessageRequest->addOutputSelector("Messages.Message.ReceiveDate");
	$myMessageRequest->addOutputSelector("Messages.Message.Read");
	$myMessageRequest->addOutputSelector("Messages.Message.MessageID");

	$response = $proxy->GetMyMessages($myMessageRequest);

	$messages = [];

	foreach ($response->getMessages() as $message) {
		$data['sender'] = $message->getSender();
		$data['subject'] = $message->getSubject();
		$data['id'] = $message->getMessageId();
		$data['receiveDate'] = $message->getReceiveDate();
		$data['ItemID'] = $message->getItemId();
		$data['read'] = $message->getRead();
		$messages[] = $data;
	}

	echo json_encode($messages);