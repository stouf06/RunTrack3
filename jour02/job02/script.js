
        /* Fonction pour afficher ou cacher l'article */
function showhide() {
        /* Vérifier si l'article existe déjà */
    let article = document.getElementById('citation');
    
    if (article) {
        /* Si l'article existe, le supprimer */
        article.remove();
    } else {
        /* Si l'article n'existe pas, le créer et l'ajouter à la page */
        let newArticle = document.createElement('article');
        newArticle.id = 'citation';
        newArticle.textContent = "L'important n'est pas la chute, mais l'atterrissage !!!";
        document.body.appendChild(newArticle);
    }
}