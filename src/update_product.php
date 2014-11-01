<?php
// src/update_product.php <id> <new-name>

require_once "bootstrap.php";

$id = $argv[1];
$newName = $argv[2];

$entityManager = GetEntityManager();

$product = $entityManager->find('Product', $id);

if ($product === null) {
    echo "Product $id does not exist.\n";
    exit(1);
}

$product->setName($newName);

$entityManager->flush();
