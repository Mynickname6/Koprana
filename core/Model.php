<?php

class Model{
    protected $db;
    
    public function __construct(){
        $connectionString = App::$config['database']['type'];
        $connectionString .= ':host='.App::$config['database']['host'];
        $connectionString .= ';dbname='.App::$con['database']['name'];
        $this->db = new PDO($connectionString, App::$config['database']['user'], App::$config['database']['pass']);
    }
}