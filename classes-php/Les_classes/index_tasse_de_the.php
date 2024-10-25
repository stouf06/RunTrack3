<?php

require("tasse_de_the.php");

$tasse = new TasseDeThe(); /* Les objets (on instancie = construit l'objet pour new Vetement) */
$tasse->afficherTasse();
$tasse->boire();
$tasse->remplir();
$tasse->afficherTasse();

?>