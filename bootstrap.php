<?php

require_once './vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

function getEntityManager(): EntityManager {
    $paths = array(__DIR__ . '/src/Entities');
    $isDevMode = true;
    
    $dbParams = array(
        'driver'   => 'pdo_mysql',
        'user'     => 'homestead',
        'password' => 'secret',
        'dbname'   => 'homestead',
        'host'     => '127.0.0.1',
    );
    
    $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
    $entityManager = EntityManager::create($dbParams, $config);

    return $entityManager;
}

