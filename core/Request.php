<?php
namespace App\Core;
class Request{
	//static is a global function which can be accessed globally with format classname::function name(args);
	public static function uri(){
		//return trim($_SERVER['REQUEST_URI'],'/');
		return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/');
	}
	public static function method()
	{
		return $_SERVER['REQUEST_METHOD'];
	}
}