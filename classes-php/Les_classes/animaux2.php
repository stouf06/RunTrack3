<?php

class Animaux {
    protected $nom;
    protected $taille;
    protected $poids;
    protected $alimentation; 

    public function __construct($nom, $taille, $poids, $alimentation) {
        $this->nom = $nom;
        $this->taille = $taille;
        $this->poids = $poids;
        
        if (!in_array($alimentation, ['carnivore', 'herbivore', 'nectarivore'])) {
            throw new Exception("Alimentation non valide"); /* throw : Ce mot-clé est utilisé pour lancer une exception.
                                                                       Lorsqu'une exception est lancée, l'exécution du script s'arrête
                                                                       à cet endroit et cherche un gestionnaire d'exceptions.
                                                               La classe Exception en PHP : est utilisée pour représenter des erreurs
                                                                       et des exceptions qui se produisent pendant l'exécution du programme. */
        }
        $this->alimentation = $alimentation;
    }

    public function presentation() {
        echo "Le {$this->nom} a une taille de $this->taille cm. Son poids est de $this->poids kg. C'est un $this->alimentation. <br/>";
    }
}

?>