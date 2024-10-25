<?php

class Felins extends Animaux {
    private $chasser;

    public function setChasser($chasser) {
        $this->chasser = $chasser;
    }

    public function chasser() {
        if ($this->chasser) {
            echo "$this->nom chasse.<br>";
            $this->poids += 5;  // Par exemple, le félin prend du poids après avoir chassé
        } else {
            echo "$this->nom ne chasse pas.<br>";
        }
    }

    public function presentation() {
        parent::presentation();
        echo "C'est un félin.<br>";
    }
}

?>
