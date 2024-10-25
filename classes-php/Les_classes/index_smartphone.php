<?php

require("smartphone.php");

$smartphone1 = new Smartphone();

echo "Smartphone1 juste crée :";
$smartphone1->presenterSmartphone();

echo "Smartphone1 aprés modification :";
$smartphone1->setMarque("iPhone12Pro");
$smartphone1->setTailleEcran(5.2);
$smartphone1->setPrixDeBase(1200);
$smartphone1->setVersion("13");
$smartphone1->presenterSmartphone();

echo "Prix avec 50% de réduction : " . $smartphone1->calculerPrix(50) . " €<br>";
$smartphone1->vendre();
$smartphone1->mettreAjour();
$smartphone1->presenterSmartphone();

$smartphone2 = new Smartphone();

echo "Smartphone2 juste crée :";
$smartphone2->presenterSmartphone();

echo "Smartphone2 aprés modification :";
$smartphone2->setMarque("iPhone13Pro");
$smartphone2->setTailleEcran(5.6);
$smartphone2->setPrixDeBase(1300);
$smartphone2->setVersion("14");
$smartphone2->presenterSmartphone();

//$smartphone2->initialiserSmartphone();
echo "Prix avec 50% de réduction : " . $smartphone2->calculerPrix(50) . " €<br>";
$smartphone2->vendre();
$smartphone2->mettreAjour();
$smartphone2->presenterSmartphone();

$smartphone3 = new Smartphone();

echo "Smartphone3 juste crée :";
$smartphone3->presenterSmartphone();

echo "Smartphone3 aprés modification :";
$smartphone3->setMarque("iPhone14Pro");
$smartphone3->setTailleEcran(6.0);
$smartphone3->setPrixDeBase(1400);
$smartphone3->setVersion("15");
$smartphone3->presenterSmartphone();

//$smartphone3->initialiserSmartphone();
echo "Prix avec 50% de réduction : " . $smartphone3->calculerPrix(50) . " €<br>";
$smartphone3->vendre();
$smartphone3->mettreAjour();
$smartphone3->presenterSmartphone();

$smartphone4 = new Smartphone();

echo "Smartphone4 juste crée :";
$smartphone4->presenterSmartphone();

echo "Smartphone4 aprés modification :";
$smartphone4->setMarque("iPhone15Pro");
$smartphone4->setTailleEcran(6.4);
$smartphone4->setPrixDeBase(1500);
$smartphone4->setVersion("16");
$smartphone4->presenterSmartphone();

//$smartphone4->initialiserSmartphone();
echo "Prix avec 50% de réduction : " . $smartphone4->calculerPrix(50) . " €<br>";
$smartphone4->vendre();
$smartphone4->mettreAjour();
$smartphone4->presenterSmartphone();

$smartphone5 = new Smartphone();

echo "Smartphone5 juste crée :";
$smartphone5->presenterSmartphone();

echo "Smartphone5 aprés modification :";
$smartphone5->setMarque("iPhone16ProMax");
$smartphone5->setTailleEcran(6.7);
$smartphone5->setPrixDeBase(1750);
$smartphone5->setVersion("17");
$smartphone5->presenterSmartphone();

//$smartphone5->initialiserSmartphone();
echo "Prix avec 50% de réduction : " . $smartphone5->calculerPrix(50) . " €<br>";
$smartphone5->vendre();
$smartphone5->mettreAjour();
$smartphone5->presenterSmartphone();

// 1) Créer un tableau avec 5 valeurs 
$tableau = [];
for ($i = 0; $i < 4; $i = $i+1) {
    $tableau = ["Iphone12Pro", "Iphone13Pro", "Iphone14Pro", "Iphone15Pro", "Iphone16ProMax"];
}

/*Supprimer les doublons du tableau
$tableau = array_unique($tableau);*/

/*Réindexer le tableau pour avoir des clés continues
$tableau = array_values($tableau);*/

// 2) Trier le tableau par ordre croissant avec un tri par insertion
$taille = count($tableau);
for ($i = 1; $i < $taille; $i = $i+1) {
    $valeurActuelle = $tableau[$i];
    $j = $i - 1;

    // Déplacer les éléments du tableau qui sont plus grands que valeurActuelle
    // pour faire de la place à valeurActuelle
    while ($j >= 0 && $tableau[$j] > $valeurActuelle) {
        $tableau[$j + 1] = $tableau[$j];
        $j--;
    }
    $tableau[$j + 1] = $valeurActuelle;

}

// Afficher le tableau trié
echo "Tableau trié par ordre croissant (tri par insertion) : " . implode(", ", $tableau) . "\n" . "<br/";


?>