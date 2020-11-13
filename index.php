<?php 

require_once './vendor/autoload.php';

use NeueFische\Router\Router;
use NeueFische\Controller\ApiCreateUserController;
use NeueFische\Controller\ApiUsersController;
use NeueFische\Controller\ApiProductsController;

session_start();

$router = new Router(
    [
        // Request URL => Destination Controller Class
        "/api/create-user" => ApiCreateUserController::class,
        "/" => ApiUsersController::class,
        "/api/products" => ApiProductsController::class,
    ]
);

$router->route($_SERVER['REQUEST_URI']);