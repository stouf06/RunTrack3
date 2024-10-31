
$(document).ready(function() {
    $('#jeuTaquin .carreau').on('click', function() {
        const carteClic = $(this);
        const carteVide = $("[carteid='0']");

        // Vérifie si la carte cliquée est adjacente à la carte vide
        if (estAdjacent(carteClic, carteVide)) {
            melanger(carteClic, carteVide);
        }
    });

    $('#recommencer').on('click', function() {
        demarrer();
    });

    function demarrer() {
        for (let i = 0; i < 10; i++) {
            const list = $('#jeuTaquin .carreau');
            const carteMelanger1 = $("[carteid='" + parseInt(Math.random() * 9) + "']");
            const carteMelanger2 = $("[carteid='" + parseInt(Math.random() * 9) + "']");
            melanger(carteMelanger1, carteMelanger2);
        }
    }

    function melanger(carte1, carte2) {
        const carteID = carte1.attr("carteid");
        const carteSrc = carte1.attr("src");
        
        carte1.attr("carteid", carte2.attr("carteid"));
        carte1.attr("src", carte2.attr("src"));

        carte2.attr("carteid", carteID);
        carte2.attr("src", carteSrc);
    }

    // Fonction pour vérifier si deux cartes sont adjacentes
    function estAdjacent(carte1, carte2) {
        const pos1 = carte1.index();
        const pos2 = carte2.index();

        // Définir la logique d'adjacence (généralement basé sur une grille 3x3)
        return (
            pos1 === pos2 - 1 || // carte à gauche
            pos1 === pos2 + 1 || // carte à droite
            pos1 === pos2 - 3 || // carte au-dessus
            pos1 === pos2 + 3    // carte en-dessous
        );
    }

    demarrer();
});
