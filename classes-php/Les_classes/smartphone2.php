<?php

class Smartphone {
    private $marque = "";
    private $tailleEcran = 0.0;
    private $prixDeBase = 0.0;
    private $etatNeuf = true; // booléen (true = neuf)
    private $etatOccasion = false; // booléen (false = occasion)
    private $version = "";
    private $augmenteLaVersion = "";

    public function __construct($marque, $tailleEcran, $prixDeBase, $etatNeuf, $version) {
        $this->marque = $marque;
        $this->tailleEcran = $tailleEcran;
        $this->prixDeBase = $prixDeBase;
        $this->etatNeuf = $etatNeuf;
        $this->version = $version;
    }

    public function initialiserSmartphone() {
        echo "Le smartphone est un " . $this->marque . ". ";
        echo "La taille de son écran est de " . $this->tailleEcran . " pouces, ";
        echo "pour un prix conseillé de " . $this->prixDeBase . " €. ";
        echo "Son état est " . ($this->etatNeuf ? "neuf" : "occasion") . ", ";
        echo "et sa version est l'" . $this->version . ".<br>";
    }

    public function calculerPrix($reductionPourcentage) {
        $montantReduction = ($this->prixDeBase * $reductionPourcentage) / 100;
        $prixFinal = $this->prixDeBase - $montantReduction;
        return $prixFinal;
    }

    public function vendre() {
        $etat = $this->etatNeuf ? "neuf" : "occasion";
        echo "Son état est d'" . $etat . ", ";
        echo "pour un prix de " . $this->prixDeBase . " €.<br>";
    }

    public function mettreAjour() {
        // Exemple de mise à jour de version
        $this->version = "ios" . (substr($this->version, 3) + 1);
        echo "La version a été mise à jour à " . $this->version . ".<br>";
    }
}

?>