<?php

class Router
{
	private $route;
	private $controller = 'home';
	private $method     = 'index';
	var $obj;
	public function __construct()
	{
		if(isset($_SERVER['PATH_INFO']))
		{
			$this->route = $_SERVER['PATH_INFO'];
		}
		$infos = explode('/', $this->route);
		
		if(isset($infos[1]))
			$this->controller = $infos[1];
		if(isset($infos[2]))
			$this->method     = $infos[2];
	}
	public function init_controller()
	{
		$file = APP.'controllers'.DS.$this->controller.'Controller.php';
		if(file_exists($file))
		{
			require $file;
			$class = $this->controller.'Controller';
			$this->obj = new $class;
		}
		else
		{
			exit('ERROR 404 : The file '. $file . ' doesn\'t exists !');
		}
	}
	public function load()
	{
		$this->init_controller();
		$method = $this->method;
		$obj =& $this->obj;
		if(method_exists($obj, $method))
		{
			return $obj->$method();
		}
		else
		{	
			exit('ERROR 404 : The method '. $method . ' doesn\'t exists !');
		}
	}
}