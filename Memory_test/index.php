<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu de Memory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Jeu de Memory</h1>
        <form action="game_process.php" method="POST">
            <label for="paires">Nombre de paires (entre 3 et 12) :</label>
            <input type="number" id="paires" name="paires" min="3" max="12" value="8" required>

            <label for="joueur1">Nom du Joueur 1 :</label>
            <input type="text" id="joueur1" name="joueur1" required>

            <label for="joueur2">Nom du Joueur 2 :</label>
            <input type="text" id="joueur2" name="joueur2" required>

            <button type="submit" class="btn">Commencer le jeu</button>
        </form>
    </div>
</body>
</html>