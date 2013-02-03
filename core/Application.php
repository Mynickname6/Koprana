<?php
class Application
{
	public static $config = array();
	public static $router = null;
	public static function run()
	{
		self::$config = require_once ROOT.DS.'config'.DS.'main.php';
		self::$router = new Router;
		self::$router->load();
	}
}