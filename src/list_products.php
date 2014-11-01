<?php
// src/list_products.php

require_once "bootstrap.php";

$entityManager = GetEntityManager();

$productRepository = $entityManager->getRepository('Product');
$products = $productRepository->findAll();

$items = 0;
foreach ($products as $product) {
    echo sprintf("-%s\n", $product->getName());
    $items++;
}

echo "\nTotal: $items products.";
