<?php

use App\Site\controller\HomeController;
use App\Site\controller\ContactController;

$router->addRoute('/', HomeController::class, 'index');
$router->addRoute('/contact', ContactController::class, 'index');