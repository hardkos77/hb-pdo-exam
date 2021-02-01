<?php

include 'db.inc.php';

$dsn = 'mysql:dbname=beanies_exam_JLH;host=localhost';
$user = 'root'; // Utilisateur par défaut
$password = 'root'; // Par défaut, pas de mot de passe sur Wamp

try {
    $connection = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    exit('Connexion échouée : ' . $e->getMessage());
}
