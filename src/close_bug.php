<?php
// src/close_bug.php [BugId]

require_once "bootstrap.php";

$entityManager = GetEntityManager();

$theBugId = $argv[1];

$bug = $entityManager->find("Bug", (int) $theBugId);
$bug->close();

$entityManager->flush();
