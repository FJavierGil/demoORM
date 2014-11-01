<?php
// src/list_users.php

require_once "bootstrap.php";

$entityManager = GetEntityManager();

$userRepository = $entityManager->getRepository('User');
$users = $userRepository->findAll();

$items = 0;
foreach ($users as $user) {
    echo sprintf("-%d: %s\n", $user->getId(), $user->getName());
    $items++;
}

echo "\nTotal: $items users.";
