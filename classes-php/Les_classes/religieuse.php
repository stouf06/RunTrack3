<?php

class Religieuse extends Patisseries { /* Classe fille */
    private $saveurPremierBoule;
    private $saveurDeuxiemeBoule;
    private $supplementChantilly;

    public function setSaveurPremierBoule($saveur) {
        $this->saveurPremierBoule = $saveur;
    }

    public function setSaveurDeuxiemeBoule($saveur) {
        $this->saveurDeuxiemeBoule = $saveur;
    }

    public function setChantilly($chantilly) {
            $this->supplementChantilly = $chantilly; 
    }

    public function afficherReligieuse() { /* Pour afficher tous les attributs de la religieuse */
        $this->presentation();
        echo "C'est une religieuse dont la première boule est au $this->saveurPremierBoule et la deuxième boule est au $this->saveurDeuxiemeBoule.<br/>";
        echo "Avec supplément chantilly : ";
        echo $this->supplementChantilly ? "Oui" : "Non"; /* Méthode Ternaire $var = [if] ? [then] : [else]; */
        echo "<br/><br/>";
    }

    public function modifierPremiereBoule($nouvelleSaveur) {
        $this->saveurPremierBoule = $nouvelleSaveur;
    }

    public function modifierDeuxiemeBoule($nouvelleSaveur) {
        $this->saveurDeuxiemeBoule = $nouvelleSaveur;
    }
}

?>