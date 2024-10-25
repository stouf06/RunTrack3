<?php

class Colibri extends Oiseaux {
    public function __construct($nom, $taille, $poids) {
        parent::__construct($nom, $taille, $poids, 'nectarivore', true);
    }

    public function presentation() {
        parent::presentation();
        /* echo "C'est un colibri. <br/>"; */
    }
}

?>