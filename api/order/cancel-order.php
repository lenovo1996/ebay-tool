<?php

	$token = '';
	$buyerPaid = $_POST['buyerPaid'];
	$buyerPaidDate = $_POST['buyerPaidDate'];
	$cancelReason = $_POST['cancelReason'];
	$orderId = $_POST['orderId'];

	$headers = [
		'Content-Type: application/json',
		'Authorization: TOKEN ' . $token
	];

	$postData = [
		'buyerPaid' => $buyerPaid,
		'buyerPaidDate' => [
			'value' => $buyerPaidDate . 'T19:00:00.768Z'
		],
		'cancelReason' => $cancelReason,
		'legacyOrderId' => $orderId
	];

	$ch = curl_init($url);
	# Setup request to send json via POST.
	$payload = json_encode($postData);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	# Return response instead of printing.
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	# Send request.
	$result = curl_exec($ch);
	curl_close($ch);
	# Print response.

	header('Content-Type: application/json');
	echo $result;



