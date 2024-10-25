function tri(numbers, order) { /* La fonction tri prend deux paramètres : un tableau de nombres (numbers)
                                  et une chaîne de caractères (order) qui spécifie l'ordre de tri
                                  ("asc" pour ascendant, "desc" pour descendant) */

    numbers.sort(function(x, y) { /* La méthode sort() est utilisée avec une fonction de comparaison
                                     pour trier le tableau soit en ordre croissant (si order est "asc"),
                                     soit en ordre décroissant (si order est "desc") */

        if (order === 'asc') {
            return x - y; // Tri ascendant

        } 
        else if (order === 'desc') {
            return y - x; // Tri descendant
        }
        
    })
    return numbers;
}

/* Par exemple */

let numbers = [27, 12, 5, 17, 9, 3, 22, 1];
let order = 'asc'; /* On peut modifier "order" pour tester le tri descendant = 'desc' */
let result = tri(numbers, order);

console.log(result); /* Affiche le tableau trié dans l'ordre demandé */