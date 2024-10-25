<?php

class Autruche extends Oiseaux {
    public function __construct($nom, $taille, $poids) {
        parent::__construct($nom, $taille, $poids, 'herbivore', false);
    }

    public function presentation() {
        parent::presentation();
        /* echo "C'est une autruche. <br/>"; */
    }
}

?>