<?php

require_once('db_memory_game.php');
require_once('players.php');

// Récupérer les données du formulaire
$nom = isset($_POST['nom']) ? $_POST['nom'] : 'Joueur Inconnu';
$score = isset($_POST['score']) ? intval($_POST['score']) : 0;

// Créer un nouveau joueur et l'ajouter au classement
$joueur = new Joueur($nom);
$joueur->setScore($score);

// Afficher la progression du joueur
$joueur->afficherProgression();

?>