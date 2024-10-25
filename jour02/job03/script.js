
    /* Fonction pour incrémenter le compteur */
function addone() {
    /* Récupérer l'élément <p> avec l'id "compteur" */
    let compteur = document.getElementById('compteur');
    /* Convertir son contenu texte en entier, l'incrémenter de 1 */
    compteur.textContent = parseInt(compteur.textContent) + 1;
}

    /* Attacher l'événement click au bouton lorsque la page est chargée */
document.addEventListener('DOMContentLoaded', function() {
    /* Récupérer le bouton et ajouter un écouteur d'événement pour le clic */
    document.getElementById('button').addEventListener('click', addone);
});