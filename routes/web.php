<?php

require_once '../app/Router/Route.php';

use App\Controllers\HomeController;
use App\Request\Request;
use \App\Router\Router;

$request = Request::make();

$router = Router::make();

$router->get('/', [HomeController::class, 'index']);