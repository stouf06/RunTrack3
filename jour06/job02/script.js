
/* Confirmer l'achat d'un papillon */
function confirmPurchase() {
    const purchaseModal = new bootstrap.Modal(document.getElementById('purchaseModal'));
    purchaseModal.show();
  }
  
  /* Rebooter le monde avec une citation aléatoire de Blade Runner */
  const bladeRunnerQuotes = [
    "I've seen things you people wouldn't believe.",
    "All those moments will be lost in time, like tears in rain.",
    "Wake up! Time to die.",
    "Quite an experience to live in fear, isn't it?"
  ];
  function rebootWorld() {
    const jumbotron = document.getElementById('jumbotron');
    const randomQuote = bladeRunnerQuotes[Math.floor(Math.random() * bladeRunnerQuotes.length)];
    jumbotron.innerHTML = `<h2>${randomQuote}</h2>`;
  }
  
  /* Changer le contenu du jumbotron en fonction de la pagination */
  function changeContent(page) {
    const jumbotron = document.getElementById('jumbotron');
    let content;

    switch (page) {
        case 1:
            content = "<h2>C'est quoi le HTML en informatique ?</h2><p>HTML (pour HyperText Markup Language, qu'on peut traduire en « langage de balisage hypertexte ») est le langage utilisé pour structurer une page web et son contenu.<br><br>On peut par exemple organiser le contenu en un ensemble de paragraphes, une liste d'éléments, utiliser des images ou des tableaux de données.</p>";
            break;
        case 2:
            content = "<h2>Quel est le rôle de JavaScript en informatique ?</h2><p>JavaScript est un langage de programmation qui permet de créer du contenu mis à jour de façon dynamique, de contrôler le contenu multimédia, d'animer des images, et tout ce à quoi on peut penser.<br><br>Bon, peut-être pas tout, mais vous pouvez faire bien des choses avec quelques lignes de JavaScript.</p>";
            break;
        case 3:
            content = "<h2>Quel est l'intérêt du Bootstrap en informatique ?</h2><p>Conçu pour permettre le développement réactif de sites Web mobiles, Bootstrap fournit un ensemble de syntaxes pour la conception de modèles.<br><br>En tant que framework, Bootstrap inclut les bases du développement Web réactif, de sorte que les développeurs n'ont besoin que d'insérer le code dans un système de grille prédéfini.</p>";
            break;
        case undefined:
        case 0:
            content = `
                <h2>Bonjour, monde!</h2>
                <p>Il existe plusieurs visions du terme :</p>
                <p>Le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison.</p>
                <p>Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnement plus ou moins naturel.</p>
                <p>Le sens étendu désigne l'univers dans son ensemble.</p>
                <button class="btn btn-danger" onclick="rebootWorld()">Rebooter le Monde</button>
                <div id="spinner" class="spinner-border text-danger ms-2" role="status"></div>
            `;
            break;
        default:
            content = "<h2>Page non trouvée</h2><p>Le contenu demandé n'est pas disponible.</p>";
    }

    jumbotron.innerHTML = content;
}


  /* Activer un élément de la liste de droite */
  function activateItem(element) {
    const sidebarItems = document.getElementById('sidebar').getElementsByClassName('list-group-item');
    Array.from(sidebarItems).forEach(item => item.classList.remove('active'));
    element.classList.add('active');
  }
  
  /* Mettre à jour la barre de progression */
  function updateProgress(value) {
    const progressBar = document.getElementById('progressBar');
    let currentProgress = parseInt(progressBar.style.width);
    currentProgress = Math.min(100, Math.max(0, currentProgress + value));
    progressBar.style.width = `${currentProgress}%`;
    progressBar.setAttribute('aria-valuenow', currentProgress);
  }
  
  let keysPressed = [];

document.addEventListener('keydown', (event) => {
  /* Enregistrer les touches pressées en minuscules */
  keysPressed.push(event.key.toLowerCase());

  /* Garder uniquement les 3 dernières touches */
  if (keysPressed.length > 3) {
    keysPressed.shift();
  }

  /* Vérifier si la combinaison est "d + g + c" */
  if (keysPressed.join('') === 'dgc') {
    const login = document.getElementById('login').value;
    const password = '********'; /* Pour ne pas afficher le mot de passe en clair */
    const dogecoin = document.getElementById('dogecoin').value;
    const formInfo = `Login : ${login}, Password : ${password}, Dogecoin : ${dogecoin}`;

    /* Afficher les informations dans la modale */
    document.getElementById('formInfo').textContent = formInfo;
    const infoModal = new bootstrap.Modal(document.getElementById('infoModal'));
    infoModal.show();

    /* Réinitialiser les touches après affichage */
    keysPressed = [];
  }
});

/* Valider le formulaire et changer la couleur du spinner */
function validateAndChangeSpinnerColor() {
  const email = document.getElementById('email').value;
  const pwd = document.getElementById('pwd').value;

  /* Vérifier que l'email et le mot de passe ne sont pas vides */
  if (email && pwd) {
    const spinner = document.getElementById('spinner');
    const colors = ['text-primary', 'text-success', 'text-warning', 'text-danger'];

    /* Changer la classe du spinner avec une couleur aléatoire */
    spinner.className = 'spinner-border ' + colors[Math.floor(Math.random() * colors.length)];
  }
  return false; /* Empêcher la soumission réelle du formulaire si utilisé dans un "form" */
}