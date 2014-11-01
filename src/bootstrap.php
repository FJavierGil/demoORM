<?php
// src/bootstrap.php

require_once __DIR__ . '/../vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__ . '/../config/yml');
$isDevMode = false;

// $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
// $config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
$config = Setup::createYAMLMetadataConfiguration($paths, $isDevMode);

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'demoORM',
    'password' => '*demoORM*',
    'dbname'   => 'demoORM'
);

$entityManager = EntityManager::create($dbParams, $config);
