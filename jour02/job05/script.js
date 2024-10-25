
/* Fonction pour changer la couleur du footer en fonction du scroll */
window.onscroll = function() {
    /* Hauteur totale du document */
    var scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
    /* Position actuelle du scroll */
    var scrollTop = document.documentElement.scrollTop;
    /* Pourcentage de scrolling */
    var scrollPercent = (scrollTop / scrollHeight) * 100;

    /* Calculer la couleur en fonction du pourcentage de scrolling */
    var red = Math.min(255, Math.floor(scrollPercent * 2.55)); /* Passe de 0 à 255 */
    var green = Math.max(0, 255 - Math.floor(scrollPercent * 2.55)); /* Passe de 255 à 0 */
    var blue = 0; /* Fixé à 0 pour une couleur allant de vert à rouge */

    /* Appliquer la nouvelle couleur au footer */
    document.getElementById('dynamic-footer').style.backgroundColor = `rgb(${red}, ${green}, ${blue})`;
};