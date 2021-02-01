<?php

include 'includes/connect.php';

$data = [
    'Chapeaux',
    'Bérets',
    'Chapka',
    'Cache-oreilles',
    'Bandeaux',
];

$sql = "INSERT INTO component(name, description, price, stock) VALUES (:name, :description, :price, :stock)";
    
    $statement = $connection->prepare($sql);
    
    foreach ($donnees as $data) {
        $statement->bindParam(':name', $donnee[0], PDO::PARAM_STR);
        $statement->bindParam(':description', $donnee[1], PDO::PARAM_STR);
        $statement->bindParam(':price', $donnee[2], PDO::PARAM_STR);
        $statement->bindParam(':stock', $donnee[3], PDO::PARAM_STR);
        $isDone = $statement->execute();
        
        if (!$isDone) {
            throw new Exception('Erreur');
        }
    }
