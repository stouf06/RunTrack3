<?php

require_once('db_memory_game.php');
require_once('game.php');
require_once('players.php');
require_once('hall_of_fame.php');

// Récupérer les données du formulaire
$paires = isset($_POST['paires']) ? intval($_POST['paires']) : 8;
$joueur1 = isset($_POST['joueur1']) ? $_POST['joueur1'] : 'Joueur 1';
$joueur2 = isset($_POST['joueur2']) ? $_POST['joueur2'] : 'Joueur 2';

// Créer les joueurs
$joueur1 = new Joueur("Stéphane");
$joueur2 = new Joueur("Nadia");

// Ajoutons les joueurs dans une liste
$joueurs = [$joueur1, $joueur2];

// Créer le jeu avec le nombre de paires choisies
$jeu = new Jeu(8, $joueurs);

// Simuler une partie et afficher les informations
$joueur1->setScore(150);  // Exemple de score
$joueur2->setScore(200);  // Exemple de score

// Ajouter les joueurs au classement
$classement = new Classement();
$classement->ajouterJoueur($joueur1);
$classement->ajouterJoueur($joueur2);

// Afficher le résultat du jeu et le classement
$classement->afficherClassement();
$joueur1->afficherProgression();
$joueur2->afficherProgression();

?>