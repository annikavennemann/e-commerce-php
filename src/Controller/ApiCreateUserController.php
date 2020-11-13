<?php 

namespace NeueFische\Controller;

use NeueFische\Router\ControllerResponse;
use NeueFische\Entities\User;

require_once __DIR__ . '/../../bootstrap.php';

class ApiCreateUserController {
    public function get() {        
        $json = file_get_contents('php://input');
        $POST = json_decode($json);

        $user = new User();
        $user->setEmail($POST->email);
        $user->setPassword($POST->password);
        
        $doctrineEntityManager = getEntityManager();
        $doctrineEntityManager->persist($user);
        $doctrineEntityManager->flush();

        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin:*');
        echo json_encode([
            'userId' => $user->getId()
        ]);
        die;
    }
}