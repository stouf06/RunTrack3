<?php
if (session_id() == "") {
    session_start();
}

require_once('db_utilisateurs2.php');
require_once('user-pdo2.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new User($pdo);
    $user->disconnect();
    echo "Vous avez été déconnecté avec succès.";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déconnexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Déconnexion</h2>
        <form action="formulaire_de_deconnexion.php" method="POST">
            <button type="submit">Se déconnecter</button>
        </form>
    </div>
</body>
</html>
