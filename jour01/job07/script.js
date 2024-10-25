function jourtravaille(date) {
    const stringDate = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate();

    const joursFeries2020 = [
        "2020-1-1", /* Jour de l'an */
        "2020-4-13", /* Lundi de Pâques */
        "2020-5-1", /* Fête du Travail */
        "2020-5-8", /* Victoire 1945 */
        "2020-5-21", /* Ascension */
        "2020-6-1", /* Lundi de Pentecôte */
        "2020-7-14", /* Fête nationale */
        "2020-8-15", /* Assomption */
        "2020-11-1", /* Toussaint */
        "2020-11-11", /* Armistice 14/18 */
        "2020-12-25"  /* Noël */
    ];

    const jourSemaine = date.getDay(); /* Utilisation de "date.getDay()" pour déterminer si c'est un week-end */
    
    if (date.getFullYear() != 2020) { /* Ajout d'une condition qui renvoie un message si l'année n'est pas 2020 */
        return "La date n'est pas en 2020.";
    }

    if (joursFeries2020.includes(stringDate)) { /* La condition "joursFeries2020.includes(stringDate)" vérifie si la date est un jour férié */
        return "C'est un jour férié.";
    }

    if (jourSemaine === 0 || jourSemaine === 6) { /* Vérification des week-ends (samedi = 6, dimanche = 0) */
        return "C'est un week-end.";
    }

    return "C'est un jour travaillé.";
}

/* Tests */
console.log(jourtravaille(new Date("2020-1-1"))); /* férié */
console.log(jourtravaille(new Date("2020-4-13")));  //////
console.log(jourtravaille(new Date("2020-5-1")));   /////
console.log(jourtravaille(new Date("2020-5-8")));   /////
console.log(jourtravaille(new Date("2020-5-21")));  /////
console.log(jourtravaille(new Date("2020-6-1")));   /////
console.log(jourtravaille(new Date("2020-7-10"))); /* jour travaillé */
console.log(jourtravaille(new Date("2020-7-11"))); /* week-end */
console.log(jourtravaille(new Date("2020-7-14"))); /* férié */
console.log(jourtravaille(new Date("2020-8-15")));  /////
console.log(jourtravaille(new Date("2020-11-1")));  /////
console.log(jourtravaille(new Date("2020-11-11"))); /////
console.log(jourtravaille(new Date("2020-12-25"))); /////