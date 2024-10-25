<?php

require ('pays.php');

$pays1 = new Pays();
$pays1->initialisationPays('Australie', 'Océanie', -33.8688, 151.2093);

$pays2 = new Pays();
$pays2->initialisationPays('Inde', 'Asie', 28.6139, 77.2090);

$pays3 = new Pays();
$pays3->initialisationPays('Etats-Unis', 'Amérique du Nord', 38.8951, -77.0364);

$pays4 = new Pays();
$pays4->initialisationPays('Russie', 'Europe/Asie', 55.7558, 37.6173);

$pays5 = new Pays();
$pays5->initialisationPays('Argentine', 'Amérique du Sud', -34.6037, -58.3816);

/* Croissance de la population pour les pays suivants */
$pays1->croissancePopulation(250000); 
$pays2->croissancePopulation(475000); 
$pays3->croissancePopulation(125000); 
$pays4->decroissancePopulation(300); 
$pays5->croissancePopulation(50000);

$paysList = [$pays1, $pays2, $pays3, $pays4, $pays5];

echo "En 2022, <br/>";
echo "Population des pays après croissance ou décroissance :<br/>";
foreach ($paysList as $pays) {
    $pays->presenterPays();
}

/* Migration : 50 000 personnes migrent de l'Australie vers la Russie */ 
$pays1->migration($pays4, 50000);

/* Migration : 200 000 personnes migrent de l'Inde vers les Etats-Unis */
$pays2->migration($pays3, 200000);

/* Affichage des pays après migration */
$paysList = [$pays1, $pays2, $pays3, $pays4, $pays5];

echo "<br/>";
echo "En 2024, <br/>";
echo "Population des pays après migration :<br/>";
foreach ($paysList as $pays) {
    $pays->presenterPays();
}


/* Créer une liste de 5 pays (Choissisez les valeurs que vous voulez !)
Ensuite, classez les par ordre de population croissantes */ 

// Création de la liste des pays
$paysList = [$pays1, $pays2, $pays3, $pays4, $pays5];

echo "<br/>";
echo "Classement des pays par ordre de population croissante :<br/>";

// Tri des pays par population croissante
usort($paysList, function($a, $b) {
    return $a->getPopulationTotale() - $b->getPopulationTotale();
});

// Affichage des pays triés par population
foreach ($paysList as $pays) {
    $pays->presenterPays();
}

?>