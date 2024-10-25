<?php

class Tigre extends Felins {
    public function __construct($nom, $taille, $poids) {
        parent::__construct($nom, $taille, $poids, 'carnivore');
    }

    public function presentation() {
        parent::presentation();
        /* echo "C'est un tigre. <br/>"; */
    }
}

?>