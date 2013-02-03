<?php

class Model
{
	protected $db = null;
	protected function __construct()
	{
		$this->db = new PDO(Application::$config['database']['type'].
		':host='.Application::$config['database']['host'].
		';dbname='.Application::$config['database']['name'], 
		Application::$config['database']['user'], 
		Application::$config['database']['pass']);
	}
	public function count($table)
	{
		$q =  $this->db->query('SELECT COUNT(*) FROM '.$table);
		return $q->fetchColumn();
	}
}