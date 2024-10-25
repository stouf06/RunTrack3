<?php

class Pays {

    private $nom = "";
    private $continent = "";
    private $populationTotale = 0;
    private $latitude = 0;
    private $longitude = 0;

    public function initialisationPays($nom, $continent, $latitude, $longitude) {
        $this->nom = $nom;
        $this->continent = $continent;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->populationTotale = 1000; /* Population initiale de chaque pays */
    }

    public function croissancePopulation($nouvellesPersonnes) {
        $this->populationTotale += $nouvellesPersonnes; /* (Concaténation) Ajoute des valeurs numériques */
        if ($this->populationTotale > 1000000) {
            $this->populationTotale = 1000000; /* La population de chaque pays est limitée à 1 Millions d'habitants */
        }
    }

    public function decroissancePopulation($nouvellesPersonnes) {
        $this->populationTotale -= $nouvellesPersonnes; /* Soustrait des valeurs  */
        if ($this->populationTotale < 0) {
            $this->populationTotale = 0; /* La population de chaque pays ne peut pas être négative */
        }
    }

    public function presenterPays() {
        echo "Pays : " . $this->nom . "\n";
        echo "Continent : $this->continent\n";
        echo "Population totale : $this->populationTotale\n";
        echo "Latitude : $this->latitude\n";
        echo "Longitude : $this->longitude<br/>";
    }

    public function migration($nouveauPays, $nombre) {
        if ($this->populationTotale >= $nombre) { /* Vérifie si le pays source a assez de population pour la migration */
            $this->decroissancePopulation($nombre); /* Réduit la population du pays source */
            $nouveauPays->croissancePopulation($nombre); /* Augmente la population du pays de destination */
            echo "<br/>";
            echo "En 2023, <br/>";
            echo "$nombre personnes ont migré de $this->nom vers $nouveauPays->nom.<br/>";
        } else {
            echo "La migration est impossible car la population totale de $this->nom est insuffisante.<br/>";
        }
    }

    public function getPopulationTotale() {
        return $this->populationTotale;
    }
}

?>
