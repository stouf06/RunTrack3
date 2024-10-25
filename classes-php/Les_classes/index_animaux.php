<?php

require_once('animaux.php');
require_once('oiseaux.php');
require_once('felins.php');
require_once('autruche.php');
require_once('colibri.php');
require_once('lion.php');
require_once('tigre.php');

$animaux = new Animaux();
$animaux->setNom();
$animaux->setTaille();
$animaux->setPoids();
$animaux->setAlimentation();
$animaux->presentation();

$oiseaux = new Oiseaux();
$oiseaux->setNom('Oiseau générique');
$oiseaux->setTaille(30);
$oiseaux->setPoids(2);
$oiseaux->setAlimentation('herbivore');
$oiseaux->setPeuxVoler(true);
$oiseaux->setS_envoler(true);
$oiseaux->presentation();
$oiseaux->setAtterir(true);
$oiseaux->presentation();

$autruche = new Autruche();
$autruche->setNom('Autruche');
$autruche->setTaille(270);
$autruche->setPoids(150);
$autruche->setAlimentation('herbivore');
$autruche->setPeuxVoler(false);
$autruche->setS_envoler(false);
$autruche->presentation();
$autruche->setAtterir(true);
$autruche->presentation();

$colibri = new Colibri();
$colibri->setNom('Colibri');
$colibri->setTaille(10);
$colibri->setPoids(0.2);
$colibri->setAlimentation('nectar');
$colibri->setPeuxVoler(true);
$colibri->setS_envoler(true);
$colibri->presentation();
$colibri->setAtterir(true);
$colibri->presentation();

$felins = new Felins();
$felins->setNom('Félin générique');
$felins->setTaille(100);
$felins->setPoids(70);
$felins->setAlimentation('carnivore');
$felins->setChasser(true);
$felins->chasser();
$felins->presentation();

$lion = new Lion();
$lion->setNom('Lion');
$lion->setTaille(200);
$lion->setPoids(190);
$lion->setAlimentation('carnivore');
$lion->setChasser(true);
$lion->chasser();
$lion->presentation();

$tigre = new Tigre();
$tigre->setNom('Tigre');
$tigre->setTaille(250);
$tigre->setPoids(220);
$tigre->setAlimentation('carnivore');
$tigre->setChasser(true);
$tigre->chasser();
$tigre->presentation();

?>