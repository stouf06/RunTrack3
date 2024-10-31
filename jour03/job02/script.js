
$(document).ready(function() {
    const melangerBtn = $('#melangerBtn');
    const zoneJeu = $('#zoneJeu');
    const zoneOrdre = $('#zoneOrdre');
    const resultat = $('#resultat');
    const images = $('.arc-img');

    /* Fonction pour mélanger les images */
    function melangerImages() {
        zoneJeu.empty();
        images.sort(() => Math.random() - 0.5).appendTo(zoneJeu);
        resultat.text('');
        zoneOrdre.empty();
    }

    /* Fonction de validation */
    function verifierOrdre() {
        const ordreActuel = zoneOrdre.children().map(function() {
            return this.id;
        }).get();
        const ordreCorrect = ["img1", "img2", "img3", "img4", "img5", "img6"];
        if (JSON.stringify(ordreActuel) === JSON.stringify(ordreCorrect)) {
            resultat.text("Vous avez gagné").css('color', 'green');
        } else {
            resultat.text("Vous avez perdu").css('color', 'red');
        }
    }

    /* Rendre les conteneurs sortable */
    zoneJeu.sortable({
        connectWith: "#zoneOrdre",
        revert: true
    }).disableSelection();

    zoneOrdre.sortable({
        connectWith: "#zoneJeu",
        revert: true,
        receive: function(event, ui) {
            if (zoneOrdre.children().length === 6) {
                verifierOrdre();
            }
        }
    }).disableSelection();

    /* Écouteur pour le bouton "Mélanger" */
    melangerBtn.on('click', melangerImages);
});