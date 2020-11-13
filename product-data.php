<?php 

require_once './bootstrap.php';

use NeueFische\Entities\Products;

$productsArray = [];

$haschisch = new Products();
$haschisch->setName('Haschisch');
$haschisch->setPrice(10);
$haschisch->setDescription('abc');
$haschisch->setUsability('before-php');
$productsArray[] = $haschisch;

$rotwein = new Products();
$rotwein->setName('Rotwein');
$rotwein->setPrice(12);
$rotwein->setDescription('abc');
$rotwein->setUsability('before-php');
$productsArray[] = $rotwein;

$lsd = new Products();
$lsd->setName('LSD');
$lsd->setPrice(15);
$lsd->setDescription('abc');
$lsd->setUsability('after-php');
$productsArray[] = $lsd;

$magicMushrooms = new Products();
$magicMushrooms->setName('Magic Mushrooms');
$magicMushrooms->setPrice(10);
$magicMushrooms->setDescription('abc');
$magicMushrooms->setUsability('after-php');
$productsArray[] = $magicMushrooms;

$xtc = new Products();
$xtc->setName('Exctasy');
$xtc->setPrice(8);
$xtc->setDescription('abc');
$xtc->setUsability('after-php');
$productsArray[] = $xtc;

$doctrineEntityManager = getEntityManager();

foreach($productsArray as $products) {
    $doctrineEntityManager->persist($products);
}

$doctrineEntityManager->flush();

var_dump($doctrineEntityManager->getRepository(Products::class)->findAll());