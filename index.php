<?php
$time = microtime(true);
define('ROOT', __DIR__);
define('APP', ROOT.'/app/');
define('CORE', ROOT.'/core/');
define('EXT', '.php');
define('BENCHMARK', true);
require_once CORE.'Loader'.EXT;
App::run();

if(BENCHMARK)
{
    $elapsed_time = number_format((microtime(true) - $time), 3)*1000;
    $usage_memory = memory_get_usage() / 1000; //Kb
}