/////////////////////////////////////////////////////////////////////////////////////
////// Ecrivez un programme permettant de saisir différentes valeurs numérique //////
/// (avec l'instruction window.prompt), ces valeurs seront rangées dans un tableau.//
///////////// La saisie s'arrête quand l'utilisateur entre la valeur 0. /////////////
///// A la fin de la saisie, votre programme doit afficher le nombre de valeurs /////
///////////////////////// saisies, la somme et la moyenne. //////////////////////////
/////////////////////////////////////////////////////////////////////////////////////

let tab = new Array();
let donnee = [];
let sum = 0;
let moy = 0;

//console.table([tab]);

donnee = window.parseInt(prompt("Entrez une donnée"));

while(donnee!=0)
{
    donnee = window.parseInt(prompt("Entrez une donnée"));
    //tab.push(donnee);

    //console.table([tab]);
        if(donnee!=0)
        {
        tab.push(donnee)
        }
}
console.table([tab]);


//####### taille du tableau #######
for (index in tab) {
    console.log("liste de données : "+tab[index]);
}

//####### somme du tableau #######
for (let i=0;i<tab.length ; i++){
    console.log(tab[i])
    sum += tab[i]
}

console.log("la somme vaut "+sum)

//####### moyenne du tableau #######
moy = sum / tab.length
console.log("la moyenne de vos nombres vaut " +moy)