<?php

class TasseDeThe { /* Je définis ma classe */
    
    public $quantiteActuelle = 0 ; /* Les attributs et leurs paramêtres */
    public $quantiteMaximum = 330;
    public $estChaud = "true"; /* boolen (true= chaud) */

    /* informations de la tasse */

    public function afficherTasse() { /* Les méthodes */
        echo "La tasse a une quantité actuelle de : " . $this->quantiteActuelle . " ml. ";
        echo "La tasse a une quantité maximum de : " . $this->quantiteMaximum . " ml, ";
        echo "et le thé est " . ($this->estChaud ? "chaud" : "froid") . ". "; /* le ternaire */
    }

    public function boire() {
        $this->quantiteActuelle = 0;
        echo "La tasse est vide car tout le thé a été bu.<br>";
        
    }

    public function remplir() {
        $this->quantiteActuelle = $this->quantiteMaximum;
        echo "La tasse est à nouveau remplie avec " . $this->quantiteMaximum . " ml. ";
    }
}

?>