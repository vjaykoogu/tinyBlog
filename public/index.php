<?php

use App\core\Router;

require __DIR__.'/../vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];

$router = new Router;
require __DIR__.'/../routes/web.php'; 
$router->dispatch($uri);