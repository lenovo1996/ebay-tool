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

	delete_files('/database/' . $userDir . '/' . $id);

	echo json_encode([
		'result' => true
	]);


	function delete_files($target)
	{
		if (is_dir($target)) {
			$files = glob($target . '*', GLOB_MARK);

			foreach ($files as $file) {
				delete_files($file);
			}

			rmdir($target);
		} elseif (is_file($target)) {
			unlink($target);
		}
	}