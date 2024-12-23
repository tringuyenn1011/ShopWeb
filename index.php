<?php
// header("Location:app/views/home/index.php");



require_once __DIR__ . '/vendor/autoload.php';

use App\Controller\UserController;
use App\Router;


require __DIR__. '/app/routes.php';
$uri = $_SERVER['REQUEST_URI'];

$router->match($uri);

?>