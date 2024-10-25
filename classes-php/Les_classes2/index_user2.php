<?php

if (session_id() == "") {
    session_start();
}

require_once('db_utilisateurs2.php');
require_once('user-pdo2.php');


$user = new User($pdo);  /* Création d'un nouvel utilisateur / $pdo vient du fichier db_utilisateurs.php */
$user->register('stouf', 'couincouin06', 'stephane.haluszczak@yahoo.fr', 'Stéphane', 'Haluszczak');

if ($user->connect('stouf', 'couincouin06')) { /* Connexion de l'utilisateur */

    echo $user->getLogin(); /* Récupérer des informations spécifiques */
    echo "<br/>";
    echo $user->getEmail();
    echo "<br/>";
    echo $user->getFirstname();
    echo "<br/>";
    echo $user->getLastname();
 /* print_r($user->getAllInfos()); /* Récupérer toutes les infos de l'utilisateur */
    echo "<br/><br/>";
}
$user->disconnect(); /* Déconnexion de l'utilisateur */


$user = new User($pdo);  
$user->register('bobby', 'turlututu13', 'thomas.leconquerant@laplateforme.io', 'Thomas', 'Leconquerant');

if ($user->connect('bobby', 'turlututu13')) { 

    echo $user->getLogin();
    echo "<br/>";
    echo $user->getEmail();
    echo "<br/>";
    echo $user->getFirstname();
    echo "<br/>";
    echo $user->getLastname();
 /* print_r($user->getAllInfos()); */
    echo "<br/><br/>";
}
$user->disconnect();


$user = new User($pdo);  
$user->register('pierrot', 'pimpampoum11', 'pierrot.leloup@orange.com', 'Pierre', 'Leloup');

if ($user->connect('pierrot', 'pimpampoum11')) { 

    echo $user->getLogin();
    echo "<br/>";
    echo $user->getEmail();
    echo "<br/>";
    echo $user->getFirstname();
    echo "<br/>";
    echo $user->getLastname();
 /* print_r($user->getAllInfos()); */
    echo "<br/><br/>";
}
$user->disconnect();

?>