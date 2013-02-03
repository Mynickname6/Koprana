<?php
class Cache{
    private $path,
            $name,
            $lifetime;
            
    public function __construct($name, $lifetime){
        $this->name = $name;
        $this->lifetime = $lifetime;
        $this->path = APP.'views/cache'.$this->name.'.cache';
    }
    public function getModifAgo(){
        return filemtime($this->path);
    }
    public function isElapsed(){
        return $this->getModifAgo() > $this->lifetime;
    }
    public function get(){
        return file_get_contents($this->path);
    }
    public function write($content){
        file_put_contents($this->path, $content);
    }
}