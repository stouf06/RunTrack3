<?php

require_once ('players.php');
require_once('db_memory_game.php');

class Classement {
    private $meilleursJoueurs = [];

    // Ajouter un joueur dans le classement
    public function ajouterJoueur($joueur) {
        $this->meilleursJoueurs[] = $joueur;
        usort($this->meilleursJoueurs, function($a, $b) {
            return $b->getScore() - $a->getScore();
        });

        // Limiter à 10 meilleurs joueurs
        if (count($this->meilleursJoueurs) > 10) {
            array_pop($this->meilleursJoueurs);
        }
    }

    // Afficher le classement
    public function afficherClassement() {
        echo "Classement des 10 meilleurs joueurs :\n";
        foreach ($this->meilleursJoueurs as $index => $joueur) {
            echo ($index + 1) . ". " . $joueur->getNom() . " - Score : " . $joueur->getScore() . "\n";
        }
    }
}

?>