<?php 

class Config
{
	private function __construct(){}
	private function __clone(){}
	
	public static function get($path = null)
	{
		if($path) {
			
			$items = require_once $path . '.php';
			
			return $items;
			
		}
		
		return false;
	}
	
}