<?php

class Oiseaux extends Animaux {
    protected $peuxVoler;
    protected $setEnvoler;
    protected $setAtterir;
    protected $estEnVol = false;

    public function __construct($nom, $taille, $poids, $alimentation, $peuxVoler) {
        parent::__construct($nom, $taille, $poids, $alimentation);
        $this->peuxVoler = $peuxVoler;
    }

    public function presentation() {
        echo "C'est un animal. ";
        parent::presentation(); /* presentation() : C'est le nom de la méthode de la classe parente que l'on veut appeler.
                                   Si cette méthode existe également dans la classe enfant 
                                   (ce qu'on appelle une méthode "surchargée"), 
                                   l'utilisation de parent::presentation() permet d'exécuter la version parente de la méthode. */
        echo "C'est aussi un oiseau.<br/>";
        echo "Peux-il voler ? " . ($this->peuxVoler ? 'Oui' : 'Non'). ". Est-il en vol ? " . ($this->estEnVol ? 'Oui' : 'Non') . "<br/><br/>";
    }

    public function setEnvoler() {
        if ($this->peuxVoler) {
            $this->estEnVol = true;
            echo "{$this->nom} s'envole ! <br/><br/>";
        } else {
            echo "{$this->nom} ne peut pas voler. <br/><br/>";
        }
    }

    public function setAtterir() {
        if ($this->peuxVoler && $this->estEnVol) {
            $this->estEnVol = false;
            echo "{$this->nom} atterrit. <br/><br/>";
        } else {
            echo "{$this->nom} ne peut pas atterrir. <br/><br/>";
        }
    }
}

?>