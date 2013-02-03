<?php
/**
	*Le titre de votre serveur
	--
	*Title of your server
**/
$config['title'] = 'Mon serveur';
/**
	*L'url où est installé le CMS
	*N'oubliez pas le http:// et le slash(/) à la fin
	--
	*The url where is installed the CMS
	*Don't forget the http:// and the training slash (/)
**/
$config['base_url'] = 'http://localhost:82/myapp/';
/**
	*La réécriture d'URL permet de masquer le index.php grâce à un .htaccess
	*Renseignez ici si elle est activée (true) ou pas (false)
	--
	*The url rewriting hide the index.php thanks to a .htaccess
	*Put here wheter she's enabled (true) or not (false)
**/
$config['url_rewriting'] = true; 
/**
	*La config, vous devez la modifier ici et dans database.php
	*Si vous voulez modifier le cache => cache.php
	--
	*The config file, you must edit this one here and in database.php
	*If you want edit the cache => cache.php

**/
$config['database'] = require_once 'database.php';
$config['cache']    = require_once 'cache.php';

$config['forum'] = 'http://forum.mon-serveur.com/'; //forum de votre serveur. board of your server
$config['vote'] = 'http://rpg-paradize.com/';//votre page de vote. your vote page
$config['config'] = '#';//config.xml
$config['launcher'] = '#';//installateur/uplauncher
$config['shop_enabled'] = true; //boutique activée ? shop enabled ?
$config['per_vote'] = 30; //points par vote. points per vote
$config['level_admin'] = 5; //Le GM requis pour gérer le site. The GM required for manage the site
$config['news_per_page'] = 5;//news par page. news per page
$config['change_sexe'] = 100;//points pour changer de sexe. points for change sex
$config['host_ip'] = 'localhost';//hôte du serveur. host of server
$config['host_port'] = 444; //port de connexion. connection port
/**
	*Ne touchez pas
	*Don't touch
**/

if(!$config['url_rewriting'])
{
	$config['base_url'] .= 'index.php/';
}

return $config;