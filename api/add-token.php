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

	$token = $_POST['token'];
	$title = $_POST['title'];

	$time = time();

	mkdir($userDir . '/' . $time);

	file_put_contents($userDir . '/' . $time . '/title.txt', $title);
	file_put_contents($userDir . '/' . $time . '/token.txt', $token);

	echo json_encode([
		'result' => true,
		'msg' => 'Thêm token thành công'
	]);