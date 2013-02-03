<?php

class Controller
{
	protected function loadView($file, $data = array())
	{
		extract($data);
		include APP.'views'.DS.$file.'.php';
	}
	protected function loadModel($file)
	{
		$path = APP.'models'.DS.$file.'.php';
		if(file_exists($path))
		{
			include $path;
		}
		return new $file;
	}	
	
	protected function redirect($to)
	{
		$url = Application::$config['base_url'] . $to;
		header('location: '.$url);
	}
	protected function get_url($to)
	{
		$url = Application::$config['base_url'] . $to;
		return $url;
	}

}