<?php 

require_once './vendor/autoload.php';

use NeueFische\Router\Router;
use NeueFische\Controller\ApiCreateUserController;
use NeueFische\Controller\ApiUsersController;

session_start();

$router = new Router(
    [
        // Request URL => Destination Controller Class
        "/api/create-user" => ApiCreateUserController::class,
        "/api/users" => ApiUsersController::class,
    ]
);

$router->route($_SERVER['REQUEST_URI']);