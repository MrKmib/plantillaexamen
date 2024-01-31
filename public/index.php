<?php
declare(strict_types=1);

use EasyProjects\SimpleRouter\Router as Router;
use App\Http\Controllers\HomeController;

//para el router
//require_once '../router/Route.php';
//use router\Route;



require '../vendor/autoload.php';
$config = require '../.env.php';




$router = new Router();
$router->get('/',function(){
    echo 'hola main';
});



$router->get('/home',function(){
    $controller = new HomeController();
    $controller->index();
});


$router->start();