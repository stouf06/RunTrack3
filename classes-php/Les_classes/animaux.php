<?php

class Animaux { /* Classe mère */
    private $nom;
    private $taille;
    private $poids;
    private $alimentation;

    public function setNom($nom) {
        if(strlen($nom) <= 10) {
        $this->nom = $nom;
        }
    }

    public function setTaille($taille) {
        $taille = floatval($taille);
        if($taille >= 0 && $taille <= 250) {
        $this->taille = $taille;
        }
    }

    public function setPoids($poids) {
        $poids = floatval($poids);
        if($poids >= 0 && $poids <= 300) {
        $this->poids = $poids;
        }
    }

    public function setAlimentation($alimentation) {
        if ($alimentation === 'carnivore' || $alimentation === 'herbivore' || $alimentation === 'omnivore') {
            $this->alimentation = $alimentation;
        } else {
            throw new Exception("Type d'alimentation invalide.");
        }
    }

    public function presentation() {
        echo "Nom: $this->nom, Taille: $this->taille cm, Poids: $this->poids kg, Alimentation: $this->alimentation<br>";
    }
}

?>
