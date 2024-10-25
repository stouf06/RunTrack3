<?php

if (session_id() == "") {
    session_start();
}

require_once('db_memory_game.php');
require_once('carte.php');
require_once('jeu.php');
require_once('score.php');

$images = ['image1.png', 'image2.png', 'image3.png', 'image4.png',
           'image5.png', 'image6.png', 'image7.png', 'image8.png'];
$cartes = [];
foreach ($images as $image) {
    $cartes[] = new Carte($image);
    $cartes[] = new Carte($image); // Ajoute les paires
}
shuffle($cartes);

// Instancie le jeu
$jeu = new Jeu($cartes, 60); // 60 secondes

if ($_POST) {
    $index1 = (int)$_POST['index1'];
    $index2 = (int)$_POST['index2'];

    if ($jeu->jouerTour($index1, $index2)) {
        echo "<p class='message'>Bravo ! Vous avez trouvé une paire.</p>";
    } else {
        echo "<p class='message'>Dommage, réessayez.</p>";
    }
}

if ($jeu->isGameOver()) {
    $jeu->saveScore('Joueur1', $db);
    echo "<p class='message'>Jeu terminé ! Score : " . $jeu->getScore() . "</p>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Jeu de mémoire</title>
</head>
<body>
    <div class="game-container">
        <h1>Jeu de Mémoire</h1>
        <div class="game-board">
            <?php foreach ($cartes as $index => $carte) : ?>
                <div class="card">
                    <?php if ($carte->isRevealed()) : ?>
                        <img src="<?= $carte->getImage(); ?>" alt="Carte">
                    <?php else : ?>
                        <img src="back.jpg" alt="Dos de carte">
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
        <form method="POST">
            <label for="index1">Carte 1 :</label>
            <input type="number" name="index1" required>
            <label for="index2">Carte 2 :</label>
            <input type="number" name="index2" required>
            <button type="submit">Retourner</button>
        </form>
        <div class="timer">Temps restant : <?= $jeu->getRemainingTime(); ?> secondes</div>
    </div>
</body>
</html>