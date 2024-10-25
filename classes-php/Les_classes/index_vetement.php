<?php

require("vetement.php");

$monVetement = new Vetement(); /* Les objets (on instancie = construit l'objet pour new Vetement) */ 
$monVetement->presenter();
$monVetement->modifierVetement("pull", "rouge", "xlarge", "150€", "comme neuf");
$monVetement->presenter();

?>