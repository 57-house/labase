<?php

use Router\Router;

require "../vendor/autoload.php";

$router = new Router($_SERVER['REQUEST_URI']);


define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
// define('SCRIPTS', 'http://'.$_SERVER['HTTP_HOST'].'/public/');

$router->get('/', 'App\Controllers\Controller@index');
$router->get('/post/:id', 'App\Controllers\Controller@show');

$router->run();
