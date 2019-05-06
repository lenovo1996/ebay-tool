<?php

	header('Content-type: application/json');
	require_once '../includes/helpers.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$userDir = md5($username . $password);

	$path = $_SERVER["DOCUMENT_ROOT"] . '/database/' . $userDir;

	if (file_exists($path)) {
		session_start();
		set_session('userDir', $path);
		echo json_encode([
			'result' => true,
			'msg' => 'Đăng nhập thành công'
		]);
	} else {
		echo json_encode([
			'result' => false,
			'msg' => 'Sai tên đăng nhập hoặc mật khẩu'
		]);
	}

