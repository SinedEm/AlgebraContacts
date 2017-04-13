<?php

class User
{
	private $_db;
	private $_config;
	private $_data;
	private $_session_name;
	private $_is_logged_in;
	
	public function __construct($user = null)
	{
		$this->_config = Config::get('config/session');
		$this->_session_name = $this->_config['sessions']['session_name'];
		$this->_db = DB::getInstance();
	}
	
	public function create($fields = array())
	{
		if(!$this->_db->insert('users', $fields)) {
			throw new Exception ('There was a problem creating an account');
		}
	}

	
}