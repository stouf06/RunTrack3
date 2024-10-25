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
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    
    $user->register($login, $password, $email, $firstname, $lastname);
    echo "Utilisateur enregistré avec succès !";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Inscription</h2>
        <form action="formulaire_inscription.php" method="POST">
            <label for="login">Login:</label>
            <input type="text" name="login" required><br>
            <label for="password">Mot de passe:</label>
            <input type="password" name="password" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" required><br>
            <label for="firstname">Prénom:</label>
            <input type="text" name="firstname" required><br>
            <label for="lastname">Nom:</label>
            <input type="text" name="lastname" required><br>
            <button type="submit">S'inscrire</button>
        </form>
    </div>
</body>
</html>
