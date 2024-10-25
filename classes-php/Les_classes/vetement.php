<?php

class Vetement { /* Je définis ma classe */

    public $type = "costume"; /* Les attributs et leurs paramêtres */
    public $couleur = "noir";
    public $taille = "large";
    public $prix = "300€";
    public $etat = "irreprochable";

    public function presenter () { /* Les méthodes */
        echo " Mon $this->type ";
        echo "est de couleur $this->couleur. ";
        echo "Sa taille est $this->taille, ";
        echo "pour un prix de $this->prix. ";
        echo "Son état est $this->etat.<br>";
    }

    public function modifierVetement ($newType, $newcouleur, $newtaille, $newprix, $newetat) {
        $this->type = $newType;
        $this->couleur = $newcouleur;
        $this->taille = $newtaille;
        $this->prix = $newprix;
        $this->etat = $newetat;
    }
}

?>