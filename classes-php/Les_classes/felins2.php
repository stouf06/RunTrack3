<?php

class Felins extends Animaux {
    protected $chasser;
    public function setChasser() {
        $this->poids += 5;
        echo "Le $this->nom chasse et il grossit de 5 kg. <br/>";
    }

    public function presentation() {
        echo "C'est un animal.<br/>";
        parent::presentation();
        echo "C'est aussi un félin.<br/><br/>";
    }
}

?>