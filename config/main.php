<?php
$config['title'] = 'Mon serveur';

$config['base_url'] = 'http://localhost:82/myapp/';

$config['url_rewriting'] = true; 

$config['database'] = require_once 'database.php';
$config['cache']    = require_once 'cache.php';

$config['forum'] = 'http://forum.mon-serveur.com/'; 
$config['vote'] = 'http://rpg-paradize.com/';
$config['config'] = '#';
$config['launcher'] = '#';
$config['shop_enabled'] = true; 
$config['per_vote'] = 30; 
$config['level_admin'] = 5; 
$config['news_per_page'] = 5;
$config['change_sexe'] = 100;
$config['host_ip'] = 'localhost';
$config['host_port'] = 444;


//pas touche
if(!$config['url_rewriting'])
{
	$config['base_url'] .= 'index.php/';
}

return $config;