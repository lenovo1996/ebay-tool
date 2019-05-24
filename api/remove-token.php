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


	echo json_encode([
		'result' => rmdir('/database/' . $userDir . '/' . $id)
	]);