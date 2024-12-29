<?php

use App\Controllers\AuthenticationController;
use App\Controllers\HomeController;
use App\Router;
use App\Controllers\UserController;
use App\Controllers\ProductController;

// Usage:
$router = new Router();

// Add routes
$router->addRoute('/\//', [new UserController(), 'index']);
$router->addRoute('/\/user\/index/', [new UserController(), 'userList']);
$router->addRoute('/\/product\/index/', [new ProductController(), 'productList']);
//$router->addRoute('/\/user/', [new UserController(), 'index']);
$router->addRoute('/\/user\/show\/(\d+)/', [new UserController(), 'show']);

$router->addRoute('/\/user\/create/', [new UserController(), 'create']);
$router->addRoute('/\/product\/create/', [new ProductController(), 'create']);

$router->addRoute('/\/user\/update\/(\d+)/', [new UserController(), 'update']);
$router->addRoute('/\/product\/update\/(\d+)/', [new ProductController(), 'update']);

$router->addRoute('/\/user\/delete\/(\d+)/', [new UserController(), 'delete']);
$router->addRoute('/\/product\/delete\/(\d+)/', [new ProductController(), 'delete']);

$router->addRoute('/\/user\/signin/', [new UserController(), 'signin']);
$router->addRoute('/\/auth\/validate/', [new AuthenticationController(), 'authenticate']);
$router->addRoute('/\/user\/logout/', [new UserController(), 'logout']);

$router->addRoute('/\/home\/index/', [new HomeController(), 'index']);
$router->addRoute('/\/home\/banner/', [new HomeController(), 'banner']); 