<?php
	error_reporting(E_ALL);
	ini_set('display_errors',TRUE);
	ini_set('display_startup_errors',TRUE);

	session_start();

	spl_autoload_register(function ($class) {
		require_once 'classes/' . $class . '.php';
	});

	require_once 'functions/sanitize.php';
	
	$cookie_name = Config::get('config/session')['remember']['cookie_name'];
	$session_name = Config::get('config/session')['sessions']['session_name'];
	
	if(Cookie::exists($cookie_name) && !Session::exists($session_name)) {
		
		$hash = Cookie::get($cookie_name);
		$hashCheck = DB::getInstance()->get('user_id', 'sessions', array('hash','=',$hash));
		
		if($hashCheck->count()) {
			
			$user = new User($hashCheck->first()->user_id);
			$user->login();
		}
		
	}
