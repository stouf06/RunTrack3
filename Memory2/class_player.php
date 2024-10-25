<?php

class PlayerScore {

    private $pdo;
    //construc innitilise la connexion pdo 
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Méthode pour ajouter un score
    public function addScore($name, $score) {
        $stmt = $this->pdo->prepare("INSERT INTO score_board (username, score, datetime) VALUES (:name, :score, NOW())");
        $stmt->execute(['name' => $name, 'score' => $score]);
    }

    // Méthode pour récupérer les scores (optionnel)
    public function getScores() {
        $stmt = $this->pdo->query("SELECT * FROM players_scores ORDER BY score DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>