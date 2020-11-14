<?php 

namespace NeueFische\Controller;

use NeueFische\Router\ControllerResponse;
use NeueFische\Entities\Products;

require_once __DIR__ . '/../../bootstrap.php';

class ApiProductsController {
    public function get() {        
        $doctrineEntityManager = getEntityManager();

        $products = $doctrineEntityManager->getRepository(Products::class)->findAll();
        
        $jsonProductsArray = [];
        foreach($products as $product) {
            $jsonProductsArray[] = [
                'id' => $product->getId(),
                'name' => $product->getName(),
                'price' => $product->getPrice(),
                'description' => $product->getDescription(),
                'usability' => $product->getUsability(),
            ];
        }

        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin:*'); // auch localhost darf fetchen
        echo json_encode($jsonProductsArray);
        die;
    }
}