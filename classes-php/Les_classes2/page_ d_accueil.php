<?php

if (session_id() == "") {
    session_start();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="formulaire_de_connexion.php">Connexion</a></li>
                <li><a href="formulaire_inscription.php">Inscription</a></li>
                <li><a href="liste_des_utilisateurs.php">Liste des utilisateurs</a></li>
                <li><a href="formulaire_de_deconnexion.php">Déconnexion</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="welcome-container">
            <h1>Bienvenue sur Baba rent.com</h1>
            <p>Le site de location de chameaux en ligne</p>
        </div>
    </main>
</body>

</html>