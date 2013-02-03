<?php

class Session
{
	public function get($var)
	{
		if(!isset($_SESSION[$var]))
		{
			return false;
		}
		return $_SESSION[$var];
	}
	public function set($var, $value)
	{
		$_SESSION[$var] = $value;
	}
	public function destroy()
	{
		session_destroy();
	}
	public function start()
	{
		session_start();
	}
}
