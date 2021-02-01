<?php

include 'includes/connect.php';

$data = [
    'Chapeaux',
    'Bérets',
    'Chapka',
    'Cache-oreilles',
    'Bandeaux',
];

$sql = "INSERT INTO category (name) VALUES (:name)";
    
$statement = $connection->prepare($sql);

foreach ($data as $beanie) {
    $statement->bindParam(':name', $beanie, PDO::PARAM_STR);
    $isDone = $statement->execute();
    
    if (!$isDone) {
        throw new Exception('Erreur lors de l\'insertion de la donnée : ' . $name);
    }
}
