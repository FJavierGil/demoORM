<?php
// src/bootstrap.php

require_once __DIR__ . '/../vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

function GetEntityManager()
{
  $paths = array(__DIR__ . '/../config/yml');
  $isDevMode = true;
  // If $isDevMode is true caching is done in memory with the ArrayCache. Proxy objects are recreated on every request.

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

  return EntityManager::create($dbParams, $config);
}
