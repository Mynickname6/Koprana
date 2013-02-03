<?php

class Controller{
    public function url($to){
        $url = App::$config['base_url'] . $to;
        return $url;
     }
     public function redirect($to){
      $url = App::$config['base_url'] . $to;
        header('location: '.$url);
     }
     public function loadModel($name, $newname = null){
            $location = APP.'models/'.$name.EXT;
            require $location;
            $objname = $newname == null ? $name : $newname;
            $this->$objname = new $name;
     }
     public function loadView($name, $data = array()){
        extract($data);
        require APP.'views/'.$name.EXT;
     }
}