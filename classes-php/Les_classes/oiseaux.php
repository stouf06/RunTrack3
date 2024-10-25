<?php

class Oiseaux extends Animaux {
    private $peuxVoler;
    private $estEnVol = false;

    public function setPeuxVoler($peuxVoler) {
        $this->peuxVoler = $peuxVoler;
    }

    public function setS_envoler($s_envoler) {
        if ($this->peuxVoler && $s_envoler) {
            $this->estEnVol = true;
            echo "$this->nom est maintenant en vol.<br>";
        } else {
            echo "$this->nom ne peut pas voler.<br>";
        }
    }

    public function setAtterir($atterir) {
        if ($this->peuxVoler && $this->estEnVol && $atterir) {
            $this->estEnVol = false;
            echo "$this->nom a atterri.<br>";
        } else {
            echo "$this->nom ne peut pas atterrir.<br>";
        }
    }

    public function presentation() {
        parent::presentation();
        echo "Peut voler: " . ($this->peuxVoler ? 'Oui' : 'Non') . ", Est en vol: " . ($this->estEnVol ? 'Oui' : 'Non') . "<br>";
    }
}

?>
