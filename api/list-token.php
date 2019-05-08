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

	$list = scandir($userDir);

	$data = [];
	foreach ($list as $file) {
		if (in_array($file, ['.', '..'])) {
			continue;
		}

		$m = [
			'id' => $file,
			'title' => file_get_contents($userDir . '/' . $file . '/title.txt'),
			'atime' => date('H:i:s d/m/Y', fileatime($userDir . '/' . $file . '/token.txt')),
			'token' => file_get_contents($userDir . '/' . $file . '/token.txt'),
		];
		$data[] = $m;
	}

	echo json_encode([
		'result' => true,
		'data' => $data
	]);