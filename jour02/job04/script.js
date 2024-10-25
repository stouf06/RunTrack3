
const textarea = document.getElementById('keylogger');

        document.addEventListener('keypress', function(event) {
            event.preventDefault(); /* Eviter l'action par défaut */
                /* Vérifie si la touche pressée est une lettre (a-z ou A-Z) */
            if ((event.key >= 'a' && event.key <= 'z') || (event.key >= 'A' && event.key <= 'Z')) {
                /* Si le focus est sur le textarea, on ajoute la lettre deux fois */
                if (document.activeElement === textarea) {
                    textarea.textContent += event.key + event.key; /* Concaténation (L'opérateur d'affectation d'addition ( += ) ajoute une valeur à une variable) */
                } else {
                /* Sinon, on ajoute la lettre une seule fois */
                    textarea.textContent += event.key; /* Concaténation (L'opérateur d'affectation d'addition ( += ) ajoute une valeur à une variable) */
                }
                console.log(textarea.textContent);
            }
        });