<?php

class Eclair extends Patisseries { /* Classe fille */
    private $saveurCreme;
    private $saveurGlacage;
    private $mesure;

    public function setSaveurCreme($saveurCreme) {
        $this->saveurCreme = $saveurCreme;
    }

    public function setSaveurGlacage($saveurGlacage) {
        $this->saveurGlacage = $saveurGlacage;
    }

    public function setMesure($mesure) {
        $this->mesure = $mesure;
    }


    public function afficherEclair() { /* Pour afficher tous les attributs de l'éclair */
        $this->presentation();
        echo "C'est un éclair qui mesure $this->mesure cm, avec une crème au $this->saveurCreme, et un glaçage au $this->saveurGlacage.<br/><br/>";
    }

    public function changerGlacage($nouveauGlacage) {
        $this->saveurGlacage = $nouveauGlacage;
    }

    public function changerCreme($nouvelleCreme) {
        $this->saveurCreme = $nouvelleCreme;
    }
}

?>