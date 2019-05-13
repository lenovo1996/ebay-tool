<?php

	$proxy = require_once '../../session_trading.php';

	require_once $sdk_dir . '/trading/AddMemberMessageRTQRequestType.php';

	$addmembermessagertqrequest = new AddMemberMessageRTQRequestType();

	$membermessage = new MemberMessageType();

	$addmembermessagertqrequest->setMemberMessage($membermessage);

	$membermessage->setBody($_POST['body']);

	if ($_POST['media_url']) {
		$messagemedia = new MessageMediaType();
		$messagemedia->setMediaName($_POST['media_name']);
		$messagemedia->setMediaURL($_POST['media_url']); // http://image.com/a.jpg
		$membermessage->addMessageMedia($messagemedia);
	}

	$membermessage->setParentMessageID($_POST['parent_message_id']); // externalMessageID
	$membermessage->addRecipientID($_POST['sender']);
	$addmembermessagertqrequest->setVersion("1101");

	$response = $proxy->AddMemberMessageRTQ($addmembermessagertqrequest);

	echo json_encode([
		'result' => $response->getAck()
	]);