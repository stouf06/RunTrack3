

function bisextile(annee) {
    if (annee % 4 === 0) {
        return true;
    }
    return false;
}

let anneeBisextile = bisextile(2024)

if(anneeBisextile) alert("C'est une année bisextile")
else alert("Ce n'est pas une année bisextile")


for(let i = 1800; i < 2100; i ++) {
    console.log("L'année " + i + " est : " + bisextile(i))
}