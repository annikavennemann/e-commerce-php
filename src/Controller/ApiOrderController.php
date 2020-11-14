<?php 

namespace NeueFische\Controller;

use NeueFische\Router\ControllerResponse;
use NeueFische\Entities\Order;
use NeueFische\Entities\OrderedItems;

require_once __DIR__ . '/../../bootstrap.php';

class ApiOrdersController {
    public function get() {        
        $json = file_get_contents('php://input');
        $POST = json_decode($json);

        $order = new Order();
        $order->setCreatedDatetime($POST->createdDatetime);
        $order->setTotalSum($POST->totalSum);
        $order->setCustomerId($POST->customeId);


        //in if condition, wenn klar ist, wie json aussieht!
        $orderedItem = new OrderedItem();
        $orderedItem->setOrder($order->id);
        $orderedItem->setProductId($POST->productId);
        $orderedItem->setQuantity($POST->quantity);
        $orderedItem->setPrice($POST->price);
        
        $doctrineEntityManager = getEntityManager();
        $doctrineEntityManager->persist($order);
        $doctrineEntityManager->flush();

        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
        echo json_encode([
            'orderId' => $order->getId()
        ]);
        die;
    }
}