<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un joueur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Ajouter un Joueur</h1>
        <form action="add_player_process.php" method="POST">
            <label for="nom">Nom du Joueur :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="score">Score :</label>
            <input type="number" id="score" name="score" required>

            <button type="submit" class="btn">Ajouter</button>
        </form>
    </div>
</body>
</html>