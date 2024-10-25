<?php

if (session_id() == "") {
    session_start();
}

require_once('db_utilisateurs2.php');
require_once('user-pdo2.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new User($pdo);
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    if ($user->connect($login, $password)) {
        echo "Connexion réussie ! Bienvenue, " . $user->getFirstname();
    } else {
        echo "Erreur de connexion, veuillez réessayer.";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Connexion</h2>
        <form action="formulaire_de_connexion.php" method="POST">
            <label for="login">Login:</label>
            <input type="text" name="login" required><br>
            <label for="password">Mot de passe:</label>
            <input type="password" name="password" required><br>
            <button type="submit">Se connecter</button>
        </form>
    </div>
</body>
</html>
