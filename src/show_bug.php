<?php
// src/show_bug.php BugId

require_once "bootstrap.php";

$theBugId = $argv[1];

$entityManager = GetEntityManager();

$bug = $entityManager->find("Bug", (int) $theBugId);

echo "Bug: " . $bug->getDescription() . "\n";
echo "Engineer: ". $bug->getEngineer()->getName() . "\n";
