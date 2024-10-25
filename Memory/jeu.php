<?php

if (session_id() == "") {
    session_start();
}

require_once('db_memory_game.php');
require_once('carte.php');
require_once('score.php');

class Jeu {
    private $cartes;
    private $score;
    private $startTime;
    private $timeLimit;

    public function __construct($cartes, $timeLimit) {
        $this->cartes = $cartes;
        $this->score = 0;
        $this->startTime = time();  // Temps de début
        $this->timeLimit = $timeLimit;  // Limite en secondes
    }

    // Calcul du temps restant
    public function getRemainingTime() {
        $elapsed = time() - $this->startTime;
        return max(0, $this->timeLimit - $elapsed);  // Assure que le temps ne soit jamais négatif
    }

    // Fonction pour jouer un tour
    public function jouerTour($index1, $index2) {
        // Vérifie que les cartes sont valides et non déjà révélées
        if (!$this->cartes[$index1]->isRevealed() && !$this->cartes[$index2]->isRevealed()) {
            // Vérifie si les deux cartes correspondent
            if ($this->cartes[$index1]->getImage() == $this->cartes[$index2]->getImage()) {
                $this->cartes[$index1]->reveal();
                $this->cartes[$index2]->reveal();
                $this->score++;  // Incrémentation du score si paire trouvée
                return true;
            }
        }
        return false;  // Pas de paire trouvée
    }

    // Vérifie si le jeu est terminé
    public function isGameOver() {
        // Le jeu est terminé si le temps est écoulé ou si toutes les paires ont été trouvées
        return $this->getRemainingTime() <= 0 || $this->score == count($this->cartes) / 2;
    }

    // Renvoie le score actuel
    public function getScore() {
        return $this->score;
    }

    // Sauvegarde le score dans la base de données
    public function saveScore($playerName, $db) {
        // Préparation de la requête pour insérer le score
        $query = $db->prepare("INSERT INTO score_board (username, score, time) VALUES (?, ?, ?)");
        // Exécution de la requête avec les valeurs du joueur
        $query->execute([$playerName, $this->score, $this->getRemainingTime()]);
    }
}
?>
