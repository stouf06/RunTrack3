<?php

class Smartphone {
    private $marque = "Iphone";
    private $tailleEcran = 0.0;
    private $prixDeBase = 0.0;
    private $etatNeuf = true; /* booléen (true = neuf) */
    private $etatOccasion = false;
    private $version = 0;

    /* J'utilise les Setters */
    public function setMarque($marque) {
        if (strlen($marque) <= 14) {
            $this->marque = $marque;
        }
    }

    public function setTailleEcran($tailleEcran) {
        $tailleEcran = floatval($tailleEcran);

        if($tailleEcran >= 1 && $tailleEcran < 10) {
            $this->tailleEcran = $tailleEcran;
        }
    }

    public function setPrixDeBase($prixDeBase) {
        $prixDeBase = intval($prixDeBase);

        if($prixDeBase >= 1000 && $prixDeBase < 2000) {
            $this->prixDeBase = $prixDeBase;
        }
    }

    public function setVersion($version) {
        $version = intval($version);

        if($version >= 13 && $version <= 18) {
            $this->version = $version;
        }
    }

    /* J'utilise les Getters */
    public function getMarque() {
        return $this->marque;
    }

    public function getTailleEcran() {
        return $this->tailleEcran;
    }

    public function getPrixDeBase() {
        return $this->prixDeBase;
    }

    public function getEtatNeuf() {
        return $this->etatNeuf;
    }

    public function getEtatOccasion() {
        return $this->etatOccasion;
    }

    public function getVersion() {
        return $this->version;
    }

    public function presenterSmartphone() {
        echo "Le smartphone est un " . $this->marque . ". ";
        echo "La taille de son écran est de " . $this->tailleEcran . " pouces, ";
        echo "pour un prix conseillé de " . $this->prixDeBase . " €. ";
        echo "Son état est " . ($this->etatNeuf ? "neuf" : "occasion") . ", ";
        echo "et sa version est l'ios" . $this->version . ".<br>";
    }

    public function calculerPrix($reductionPourcentage) {
        $montantReduction = ($this->prixDeBase * $reductionPourcentage) / 100;
        $prixFinal = $this->prixDeBase - $montantReduction;
        return $prixFinal;
    }

    public function vendre() {
        $etat = $this->getEtatOccasion();
        
        $this->etatOccasion = true; 
        $this->etatNeuf = false;

        $this->prixDeBase = $this->calculerPrix(50);
    }

    public function mettreAjour() {
        $this->version += 1; /* concaténation de chaînes : ajoute des valeurs numériques */
        echo "La version a été mise à jour à l'ios" . $this->version . ".<br>";
    }
}

?>
