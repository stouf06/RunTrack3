<?php

session_start();
include 'db_memory_game.php'; // connexion à la base de données
include 'class_player.php'; // class PlayerScore

$playerScore = new PlayerScore($pdo); // Instancier la classe PlayerScore

// verif si jeu doit etre reinitialiser
if (isset($_POST['rest_game']))
{
    session_unset(); //reinitialise les variables de session 
}


// Initialiser le tableau de cartes
if (!isset($_SESSION['cards'])) {
    $numbers = range(1, 8); // 8 paires de nombres
    $cards = array_merge($numbers, $numbers); // Créer 8 paires
    shuffle($cards); // Mélanger les cartes
    $_SESSION['cards'] = $cards; // Sauvegarder les cartes en session
    $_SESSION['flipped'] = []; // Cartes retournées
    $_SESSION['matched'] = []; // Cartes trouvées
}

// Gérer la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['card_index'])) {
        $card_index = intval($_POST['card_index']);
        
        if (!in_array($card_index, $_SESSION['flipped']) && !in_array($card_index, $_SESSION['matched']))
        {
            $_SESSION['flipped'][] = $card_index; // Ajouter la carte retournée

            // Vérifier si deux cartes sont retournées
            if (count($_SESSION['flipped']) == 2) 
            {
                $first_card = $_SESSION['flipped'][0];
                $second_card = $_SESSION['flipped'][1];

                // Vérifier si les cartes correspondent
                if ($_SESSION['cards'][$first_card] == $_SESSION['cards'][$second_card]) {
                    $_SESSION['matched'][] = $first_card;
                    $_SESSION['matched'][] = $second_card;
                }

                // Réinitialiser les cartes apres 4sec
                sleep(1);
                $_SESSION['flipped'] = [];
            }
        }
    }

    // Enregistrer le score
    if (isset($_POST['submit_score'])) 
    {
        $name = $_POST['name'];
        $score = count($_SESSION['matched']);
        
        // méthode addScore pour enregistrer le score
        $playerScore->addScore($name, $score);
    }
}

// Affichage du tableau de jeu
function display_board() 
{
    $output = '<form method="POST">';
    for ($i = 0; $i < count($_SESSION['cards']); $i++) {
        if (in_array($i, $_SESSION['flipped']) || in_array($i, $_SESSION['matched']))
        {
            $output .= '<div class="card">' . $_SESSION['cards'][$i] . '</div>'; // Affiche numéro carte
        } 
        else 
        {
            $output .= '<button type="submit" name="card_index" value="' . $i . '" class="card">?</button>'; // Affiche "?" si carte pas retournée
        }
        if (($i + 1) % 4 == 0) 
        {
            $output .= '<br>'; // Nouvelle ligne après chaque ligne de 4 cartes
        }
    }
    $output .= '</form>';
    return $output;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Memory Game </title>
    <link rel="stylesheet" href="style.css">
</head>

    <h1>
        Jeu de Memory
    </h1>

    <h2>
        Score: <?php echo count($_SESSION['matched']); ?>
    </h2>
    
    <?php echo display_board(); ?> <!-- Affichage des cartes -->

    <form method="POST">
        <input type="text" name="name" placeholder="Votre nom" required>
        <button type="submit" name="submit_score">Enregistrer le score</button>
    </form>

    <form method="POST">
        <button type="submit" name="reset_game">Recommencer le jeu </button>
    </form>
    
</body>
</html>