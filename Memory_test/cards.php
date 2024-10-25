<?php

if (session_id() == "") {
    session_start();
}

require_once('db_memory_game.php');
require_once('game.php');

class Carte {
    private $id;  /* Identifiant unique pour chaque carte */
    private $valeur;
    private $estVisible;
    private $estTrouvee;

    public function __construct($valeur) {
        $this->id = uniqid();  /* Génère un identifiant unique */
        $this->valeur = $valeur;
        $this->estVisible = false;
        $this->estTrouvee = false;
    }

    public function getValeur() {
        return $this->valeur;
    }

    public function getId() {
        return $this->id;
    }

    public function retourner() {
        if (!$this->estTrouvee) {
            $this->estVisible = !$this->estVisible;
        }
    }

    public function estVisible() {
        return $this->estVisible;
    }

    public function estTrouvee() {
        return $this->estTrouvee;
    }

    public function trouverPaire() {
        $this->estTrouvee = true;
        $this->estVisible = true;  /* On laisse la carte visible une fois trouvée */
    }

    public function estEgal(Carte $autreCarte) { /* Comparer deux cartes par leur valeur */
        return $this->valeur === $autreCarte->getValeur();
    }

    public function __toString() {
        return $this->estVisible ? $this->valeur : "Carte cachée";
    }
}

?>