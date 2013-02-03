<?php
class App{
    public static $config;
    public static $router;
    
    public function run(){
        self::$config = require_once ROOT.'/config/main'.EXT;
        self::$router = new Router;
        
        self::$router->load();
    }
}