<?php

use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Router;

$router = new Router();
$router->get('/home', HomeController::class, 'index');
$router->get('/', LoginController::class, 'index');

$router->dispatch();

