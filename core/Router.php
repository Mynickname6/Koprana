<?php
class Router{
    private $url,
            $controller,
            $infos,
            $obj,
            $method;
    
    public function __construct(){
        if(isset($_SERVER['PATH_INFO']))
            $this->url = $_SERVER['PATH_INFO'];
        $this->infos = explode('/', $this->url);
        
        $this->controller = isset($infos[1]) ? $infos[1] : 'home';
        $this->method     = isset($infos[2]) ? $infos[2] : 'index';
    }
    public function init_controller(){
        $file = APP.'controllers/'.$this->controller.'Controller'.EXT;
        $obj = $this->controller.'Controller';
        if(isset($file))
        {
            require $file;
            $this->obj = new $obj;
        }
        else
        {
            include APP.'views/404.php';
        }
    }
    public function load(){
        $this->init_controller();
        $method = $this->method;
        if(method_exists($this->obj, $method)){
            $p = $this->infos;
            unset($p[0]); unset($p[1]); unset($p[2]);
            call_user_func_array(array($this->obj, $method), $p);
        }
        else{
            include APP.'views/404.php';
        }
    }
}