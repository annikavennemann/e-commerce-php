<?php 

require_once './vendor/autoload.php';

use NeueFische\Router\Router;
use NeueFische\Controller\ApiCreateUserController;
use NeueFische\Controller\ApiUsersController;
use NeueFische\Controller\ApiProductsController;
use NeueFiosche\Controller\ApiOrderController;

session_start();

$router = new Router(
    [
        // Request URL => Destination Controller Class
        "/api/create-user" => ApiCreateUserController::class,
        "/api/products" => ApiProductsController::class,
        "/api/order" => ApiOrderController::class,
        "/" => ApiUsersController::class,
        
    ]
);

$splittedUrl = explode("?", $_SERVER['REQUEST_URI']);
$router->route($splittedUrl[0]);