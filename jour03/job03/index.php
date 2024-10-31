<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Taquin</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div id="jeuTaquin">
        <!-- Les 9 cases du jeu avec 8 photographies -->

        <img class="carreau" carteid="1" src="trump1.png">
        <img class="carreau" carteid="2" src="trump2.png">
        <img class="carreau" carteid="3" src="trump3.png">
        <img class="carreau" carteid="4" src="trump4.png">
        <img class="carreau" carteid="5" src="trump5.png">
        <img class="carreau" carteid="6" src="trump6.png">
        <img class="carreau" carteid="7" src="trump7.png">
        <img class="carreau" carteid="8" src="trump8.png">
        <img class="carreau" carteid="0" src="vide.png">

    </div>
    <div id="resultat"></div>
    <button id="recommencer">Recommencer</button>
    <script src="script.js"></script>
</body>
</html>