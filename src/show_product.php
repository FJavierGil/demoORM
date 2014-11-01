<?php
// src/show_product.php <id>

require_once "bootstrap.php";

$id = (empty($argv[1])) ? 0 : $argv[1];

$entityManager = GetEntityManager();

$product = $entityManager->find('Product', $id);

if ($product === null) {
    echo "No product found.\n";
    exit(1);
}

echo sprintf("-%s\n", $product->getName());
