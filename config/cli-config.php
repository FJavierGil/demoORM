<?php
// config/cli-config.php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once __DIR__ . '/../src/bootstrap.php';

$entityManager = GetEntityManager();

return ConsoleRunner::createHelperSet($entityManager);