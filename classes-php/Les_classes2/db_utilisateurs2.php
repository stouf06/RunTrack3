<?php

if (session_id() == "") {
    session_start();
}

/* Configuration de la connexion à la base de données */
$host = 'localhost';
$dbname = 'classes'; 
$username = 'root';
$password = '';

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC 
    
];

try {
    $dsn = "mysql:host=$host;dbname=$dbname";
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $exception) {
    die('Erreur de connexion à la base de données : ' . $exception->getMessage());
}

?>