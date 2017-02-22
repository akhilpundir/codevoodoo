<?php

namespace App\Core;

class Router
{
	protected $routes = [
	'GET' => [],
	'POST' => []
	];
	
	public static function load($file)
	{

		$router = new static; 

		//equivalent of saying new Router, because the object doesn't exists yet , as routes.php is being sent as url we suppose , and we try to access a function of object so we need to define it is $router = new static or $router = new self <=> $router = new Router;
		require $file;
		return $router;
	}
	
	public function get($uri, $controller){
		$this->routes['GET'][$uri] = $controller;
	}

	public function post($uri, $controller){
		$this->routes['POST'][$uri] = $controller;
	}


	public function direct($uri, $requestType)
	{
		if(array_key_exists($uri, $this->routes[$requestType])){
				//return $this->routes[$requestType][$uri];
			//die(var_dump(...explode('@',$this->routes[$requestType][$uri])));
			return $this->callAction(
				...explode('@',$this->routes[$requestType][$uri])
				);
		}
		else{
		//throw new Exception('No routes defined for this URI');
		//return $this->routes[$requestType]['404'];
		
		return $this->callAction("PagesController","fof");

		}
	}

	protected function callAction($controller, $action)
	{

		$controller = "App\Controller\\{$controller}";
		$controller = new $controller;
		if(! method_exists($controller, $action))
		{
			throw new Exception("{$controller} does not respond to the {$action} action");
		}	
		return $controller->$action();
		//new object of class whatevercontroller eg. PagesController and action is method specified there
		
	}
}
