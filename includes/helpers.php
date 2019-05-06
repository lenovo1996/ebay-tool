<?php

	function set_session($key, $value = '')
	{
		$_SESSION[$key] = $value;
		return $_SESSION[$key];
	}