<?php

if (session_id() == "") {
    session_start();
}

/* Configuration de la connexion à la base de données */
$host = 'localhost';
$dbname = 'memory_game'; 
$username = 'root';
$password = '';

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC 
    
];

try {
    $db = new PDO('mysql:host=localhost;dbname=memory_game', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

?>