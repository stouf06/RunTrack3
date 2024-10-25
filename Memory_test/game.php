<?php

if (session_id() == "") {
    session_start();
}

require_once('cards.php');
require_once('db_memory_game.php');

class Jeu {
    private $cartes = [];
    private $paires;
    private $tentatives;
    private $cartesRetournees = [];  /* Stocke les cartes temporairement retournées */
    private $pairesTrouvees = 0;     /* Compte les paires trouvées */
    private $tour;                   /* Indique quel joueur doit jouer */
    private $joueurs;                /* Liste des joueurs */
    private $joueurActuel = 0;       /* Index du joueur en train de jouer */

    public function __construct($paires, $joueurs) {
        $this->paires = $this->choisirPaires($paires);
        if (is_array($joueurs) && count($joueurs) > 0) { /* S'assurer que c'est un tableau valide */
            $this->joueurs = $joueurs;
        } else {
            throw new Exception("Aucun joueur n'a été défini");
        }
        $this->creerCartes($this->paires);
        $this->melangerCartes();
        $this->tentatives = 0;
        $this->joueurs = $joueurs;
        $this->tour = 0;             /* Le premier joueur commence */
        $this->joueurActuel = $this->joueurs[$this->tour];
    }

    public function prochainJoueur() {
        // Alterner les joueurs après chaque tour
        $this->joueurActuel = ($this->joueurActuel + 1) % count($this->joueurs);
        return $this->joueurs[$this->joueurActuel];
    }

    private function choisirPaires($paires) {
        return max(3, min(12, $paires));
    }

    private function creerCartes($paires) {
        for ($i = 1; $i <= $paires; $i++) {
            $this->cartes[] = new Carte($i);
            $this->cartes[] = new Carte($i);
        }
    }

    private function melangerCartes() {
        shuffle($this->cartes);
    }

    public function retournerCarte($index) {
        if (isset($this->cartes[$index]) && count($this->cartesRetournees) < 2) {
            $this->cartes[$index]->retourner();
            $this->cartesRetournees[] = $this->cartes[$index];
        }
        
        if (count($this->cartesRetournees) == 2) { /* Si deux cartes ont été retournées, vérifier la paire */
            $this->verifierPaire();
        }
    }

    private function verifierPaire() {
        $this->tentatives++;  /* Incrémenter le nombre de tentatives */

        $carte1 = $this->cartesRetournees[0];
        $carte2 = $this->cartesRetournees[1];

        if ($carte1->estEgal($carte2)) { /* Paire trouvée */
            $carte1->trouverPaire();
            $carte2->trouverPaire();
            $this->pairesTrouvees++;
            echo $this->joueurActuel->getNom() . " a trouvé une paire !\n";
            $this->joueurActuel->setScore($this->joueurActuel->getScore() + 10);

        } else { /* Retourner les cartes et changer de joueur */
            $carte1->retourner();
            $carte2->retourner();
            $this->changerDeJoueur();
        }

        /* Vider les cartes retournées pour le prochain tour */
        $this->cartesRetournees = [];

        if ($this->pairesTrouvees === $this->paires) { /* Vérifier si toutes les paires ont été trouvées */
            echo "Toutes les paires ont été trouvées en " . $this->tentatives . " tentatives !\n";
            $this->afficherClassement();
        }
    }

    private function changerDeJoueur() {
        $this->tour = ($this->tour + 1) % count($this->joueurs);  /* Passer au joueur suivant */
        $this->joueurActuel = $this->joueurs[$this->tour];
        echo "C'est au tour de " . $this->joueurActuel->getNom() . " !\n";
    }

    public function afficherCartes() {
        foreach ($this->cartes as $index => $cartes) {
            echo "[$index]: " . $cartes . " ";
            if (($index + 1) % 4 == 0) {
                echo "\n";
            }
        }
    }

    public function reinitialiserJeu() { /* Réinitialiser le jeu sans recréer de nouvelles cartes */
        foreach ($this->cartes as $carte) {
            if (!$carte->estTrouvee()) {
                $carte->retourner();  /* Toutes les cartes non trouvées sont remises à l'envers */
            }
        }
        $this->cartesRetournees = [];
        $this->tentatives = 0;
        $this->pairesTrouvees = 0;
        $this->melangerCartes();
        $this->tour = 0;  /* Réinitialiser le tour au premier joueur */
        $this->joueurActuel = $this->joueurs[$this->tour];
        echo "Jeu réinitialisé ! C'est au tour de " . $this->joueurActuel->getNom() . " !\n";
    }

    public function afficherClassement() {
        usort($this->joueurs, function($a, $b) {
            return $b->getScore() - $a->getScore();
        });

        echo "Classement :\n";
        foreach ($this->joueurs as $index => $joueur) {
            echo ($index + 1) . ". " . $joueur->getNom() . " - Score : " . $joueur->getScore() . "\n";
        }
    }
}