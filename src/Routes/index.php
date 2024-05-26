<?php

use App\Controlers\HomeController;
use App\Router;

$router = new Router();
$router->get('/', HomeController::class, 'index');

$router->dispatch();

