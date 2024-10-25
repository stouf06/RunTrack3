<?php

require ('patisseries.php');
require ('eclair.php');
require ('religieuse.php');

$patisseries = new Patisseries();
$patisseries->presentation();
echo "<br/>";

$eclair = new Eclair();
$eclair->setPoids(150);
$eclair->setNote(4.5);
$eclair->setPrix(4.90);
$eclair->setSaveurCreme("chocolat");
$eclair->setSaveurGlacage("chocolat");
$eclair->setMesure(15);
$eclair->afficherEclair();
$eclair->changerCreme("café");
$eclair->changerGlacage("café");
$eclair->afficherEclair();

$religieuse = new Religieuse();
$religieuse->setPoids(175);
$religieuse->setNote(4.25);
$religieuse->setPrix(5.90);
$religieuse->setSaveurPremierBoule("chocolat");
$religieuse->setSaveurDeuxiemeBoule("chocolat");
$religieuse->afficherReligieuse();
$religieuse->modifierPremiereBoule("café");
$religieuse->modifierDeuxiemeBoule("café");
$religieuse->setChantilly(true);
$religieuse->afficherReligieuse();

?>