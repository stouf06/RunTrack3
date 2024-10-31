<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puzzle Arc-en-ciel</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
    <button id="melangerBtn">Mélanger les images</button>
    <div id="zoneJeu">
        <img src="arc1.png" id="img1" class="arc-img" draggable="true">
        <img src="arc2.png" id="img2" class="arc-img" draggable="true">
        <img src="arc3.png" id="img3" class="arc-img" draggable="true">
        <img src="arc4.png" id="img4" class="arc-img" draggable="true">
        <img src="arc5.png" id="img5" class="arc-img" draggable="true">
        <img src="arc6.png" id="img6" class="arc-img" draggable="true">
    </div>
    <div id="zoneOrdre"></div>
    <div id="resultat"></div>
    <script src="script.js"></script>
</body>
</html>