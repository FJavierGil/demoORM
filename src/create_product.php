<?php
// src/create_product.php

require_once "bootstrap.php";

$newProductName = $argv[1];

$entityManager = GetEntityManager();

$product = new Product();
$product->setName($newProductName);

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";
