<?php
class Cache
{
	private $file;
	private $lifetime;
	private $path;
	public function __construct($file, $lifetime)
	{
		$this->file = $file;
		$this->lifetime = $lifetime;
		$this->path = APP.'views'.DS.'cache'.DS.$this->file.'.cache';
	}
	public function getModifAgo()
	{
		return filemtime($this->path);
	}
	public function isElapsed()
	{
		return $this->getModifAgo() > $this->lifetime;
	}
	public function write($content)
	{
		file_put_contents($this->path, $content);
	}
	public function getContent()
	{
		return file_get_contents($this->path);
	}
}