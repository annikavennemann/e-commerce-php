<?php 

namespace NeueFische\Controller;

use NeueFische\Router\ControllerResponse;
use NeueFische\Entities\User;

require_once __DIR__ . '/../../bootstrap.php';

class ApiUsersController {
    public function get() {        
        $doctrineEntityManager = getEntityManager();

        $users = $doctrineEntityManager->getRepository(User::class)->findAll();
        
        $jsonUserArray = [];
        foreach($users as $user) {
            $jsonUserArray[] = [
                'id' => $user->getId(),
                'email' => $user->getEmail(),
            ];
        }

        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin:*'); // auch localhost darf fetchen
        echo json_encode($jsonUserArray);
        die;
    }
}