
document.getElementById('formulaireInscription').addEventListener('submit', function(event) {
    let nom = document.getElementById('nom').value;
    let prenom = document.getElementById('prenom').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;

    /* ^[A-Z] : Vérifie que le nom est entièrement en majuscule (de A à Z) et sans limitation de longueur */
    let nomPattern = /^[A-Z]+$/;
    if (!nomPattern.test(nom)) {
        alert('Le nom doit être en majuscules.');
        event.preventDefault();
    }

    /* ^[A-Z] : Vérifie que le prénom commence par une majuscule (de A à Z) */
    /* [a-zA-Z]* : Accepte les caractères suivants en minuscules ou majuscules, suivi ou non par des lettres accentuées, sans limitation de longueur */
    let prenomPattern = /^[A-ZÀ-Ý][a-zà-ÿA-ZÀ-Ý]*$/;
    if (!prenomPattern.test(prenom)) {
        alert('Le prénom doit commencer par une majuscule.');
        event.preventDefault();
}


    /* Vérification de l'email */
    let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.(fr|com|io)$/;
    if (!emailPattern.test(email)) {
        alert('Veuillez entrer un email valide.');
        event.preventDefault();
    }

    /* Vérification de la longueur du mot de passe */
    if (password.length < 8) {
        alert('Le mot de passe doit comporter au moins 8 caractères.');
        event.preventDefault();
    }
});