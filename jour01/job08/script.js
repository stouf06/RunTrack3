function sommenombrespremiers(x, y){        /* ou function sommenombrespremiers(x, y) {
                                               return estPremier(x) && estPremier(y) ? x + y : false; } */
    if(estPremier(x) && estPremier(y)) {    
                                            /* Utilisation de "l'opérateur ternaire ?" pour rendre la fonction plus concise.
                                               Suppression des commentaires supplémentaires pour clarifier le code. */
        return x + y;

    }else {
        return false
    }

}

/* Fonction pour vérifier si un nombre est premier */
function estPremier(x) {

    if (x <= 1) return false; /* Les nombres <= 1 ne sont pas premiers */

    for (let i = 2; i <= Math.sqrt(x); i = i + 1) {
        if (x % i === 0) {

            return false;
        }
    }
    return true;
}

/* Fonction pour calculer la somme si les deux nombres sont premiers */

/* Tests */
console.log(sommenombrespremiers(3, 5));  /* True->Return 8 */
console.log(sommenombrespremiers(4, 5));  /* Return false */
console.log(sommenombrespremiers(11, 13)); /* True->Return 24 */
console.log(sommenombrespremiers(8, 9));  /* Return false */
console.log(sommenombrespremiers(3, 9));  /* Return false */
console.log(sommenombrespremiers(3, 11));  /* True->Return 14 */