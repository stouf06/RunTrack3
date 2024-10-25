<?php

require_once('animaux2.php');
require_once('oiseaux2.php');
require_once('felins2.php');
require_once('autruche2.php');
require_once('colibri2.php');
require_once('lion2.php');
require_once('tigre2.php');


$autruche = new Autruche("Autruche", 270, 150); /* On instancie les nouveaux objets */
$autruche->presentation();

$colibri = new Colibri("Colibri", 10, 0.2);
$colibri->presentation();
$colibri->setEnvoler();
$colibri->presentation();
$colibri->setAtterir();

$lion = new Lion("Lion", 200, 190);
$lion->presentation();
$lion->setChasser();
$lion->presentation();

$tigre = new Tigre("Tigre", 250, 220);
$tigre->presentation();
$tigre->setChasser();
$tigre->presentation();

?>