
 // Sélection des éléments
 const afficherBtn = document.getElementById("afficherBtn");
 const cacherBtn = document.getElementById("cacherBtn");
 const texte = document.getElementById("texte");

 // Fonction pour afficher le texte
 console.log(afficherBtn);
 afficherBtn.addEventListener("click", function() {
     texte.style.display = "block";   // Affiche le texte
     afficherBtn.style.display = "none";   // Cache le bouton "Afficher le texte"
     cacherBtn.style.display = "inline";   // Affiche le bouton "Cacher le texte"
 });

 // Fonction pour cacher le texte
 cacherBtn.addEventListener("click", function() {
     texte.style.display = "none";    // Cache le texte
     afficherBtn.style.display = "inline";  // Ré-affiche le bouton "Afficher le texte"
     cacherBtn.style.display = "none"; // Cache le bouton "Cacher le texte"
 });