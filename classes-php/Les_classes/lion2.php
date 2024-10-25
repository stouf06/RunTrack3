<?php

class Lion extends Felins {
    public function __construct($nom, $taille, $poids) {
        parent::__construct($nom, $taille, $poids, 'carnivore');
    }

    public function presentation() {
        parent::presentation();
        /* echo "C'est un lion. <br/>"; */
    }
}

?>