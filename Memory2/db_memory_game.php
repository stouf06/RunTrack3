<?php

$host = '127.0.0.1'; // ou 'localhost'
$db = 'memory_game';
$user = 'root'; // votre nom d'utilisateur
$password = ''; // pas de mot de passe
// Création de la connexion
try
{
    $pdo = new PDO("mysql:host=$host;dbname=$db",$user,$password);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
// Vérification de la connexion
catch(PDOException $e)
{
    die ("Échec de la connexion : " . $e ->getMessage());
}

?>