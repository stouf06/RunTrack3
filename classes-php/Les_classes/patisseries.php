<?php

class Patisseries { /* Classe mère */
    protected $poids = 0;
    protected $note = 0;
    protected $prix = 0;

    
    public function presentation() {
        echo "Notre patisserie a un poids de $this->poids grammes.<br/>";
        echo "Il est noté $this->note/5 par nos clients les plus gourmands. ";
        echo "Son prix est de $this->prix €.<br/>";
    }

    public function setPoids($poids) {
        $poids = intval($poids);
        if($poids >= 0 && $poids <= 200) {
        $this->poids = $poids;
        }
    }

    public function setPrix($prix) {
        $prix = floatval($prix);
        if($prix >= 0 && $prix <= 10) {
        $this->prix = $prix;
        }
    }

    public function setNote($note) {
        $note = floatval($note);
        if($note >= 0 && $note <= 5) {
        $this->note = $note;
        }
    }
}

?>