<?php
// src/dashboard.php [UserId]

require_once "bootstrap.php";

$theUserId = (empty($argv[1])) ? 0 : $argv[1];

$entityManager = GetEntityManager();

$dql = "SELECT b, e, r FROM Bug b JOIN b.engineer e JOIN b.reporter r ".
       "WHERE b.status = 'OPEN' AND (e.id = ?1 OR r.id = ?1) ORDER BY b.created DESC";

$myBugs = $entityManager->createQuery($dql)
                        ->setParameter(1, $theUserId)
                        ->setMaxResults(15)
                        ->getResult();

echo "You have created or assigned to " . count($myBugs) . " open bugs:\n\n";

foreach ($myBugs as $bug) {
    echo $bug->getId() . " - " . $bug->getDescription() . "\n";
}
