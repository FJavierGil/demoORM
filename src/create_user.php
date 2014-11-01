<?php
// src/create_user.php [Username]

require_once "bootstrap.php";

$newUsername = $argv[1];

$entityManager = GetEntityManager();

$user = new User();
$user->setName($newUsername);

$entityManager->persist($user);
$entityManager->flush();

echo "Created User with ID " . $user->getId() . "\n";
