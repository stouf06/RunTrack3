<?php

require_once('db_memory_game.php');

class Joueur {
    private $nom;
    private $score;
    private $meilleursScores = [];

    public function __construct($nom) {
        $this->nom = $nom;
        $this->score = 0;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getScore() {
        return $this->score;
    }

    public function setScore($score) {
        $this->score = $score;
        $this->ajouterMeilleurScore($score);
    }

    // Ajouter un nouveau score au profil du joueur
    private function ajouterMeilleurScore($score) {
        $this->meilleursScores[] = $score;
        rsort($this->meilleursScores); // Trie les scores par ordre décroissant
    }

    // Afficher la progression du joueur
    public function afficherProgression() {
        echo "Progression de " . $this->nom . " :\n";
        foreach ($this->meilleursScores as $index => $score) {
            echo ($index + 1) . ". Score : " . $score . "\n";
        }
    }
}

?>