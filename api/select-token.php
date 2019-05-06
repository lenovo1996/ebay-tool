<?php

	header('Content-type: application/json');
	session_start();

	if (!$_SESSION['userDir']) {
		echo json_encode([
			'result' => false,
			'msg' => 'Chưa đăng nhập'
		]);
		die;
	}

	$userDir = $_SESSION['userDir'];

	$id = $_POST['id'];

	$token = file_get_contents($userDir . '/' . $id . '/token.txt');
	$title = file_get_contents($userDir . '/' . $id . '/title.txt');

	$_SESSION['token'] = $token;
	$_SESSION['title'] = $title;

	echo json_encode([
		'result' => true
	]);