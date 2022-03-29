///////////////////////////////////////////////////////////////////////////////////////////////
// Ecrivez un programme permettant de créer un tableau, dont la taille est saisie au clavier.//
/////////////Ensuite l'utilisateur doit rentrer les différentes valeurs du tableau.////////////
///////////////////Puis votre programme doit afficher le contenu du tableau.///////////////////
///////////////////////////////////////////////////////////////////////////////////////////////

let taille = prompt("taille");
let tab = Array(taille);
var donnee = 0;
var count = 1;
//var nb = tab.length;
//console.log("le tableau contient " +nb+" elements");
console.table([tab]);
var donnee = prompt("entrez une donnée " +count);
console.log(+donnee);

while(count!=taille/*donnee!="" && donnee!=null*/)
{
    count++
    var donnee = prompt("entrez une donnée " +count);
console.log(+donnee);
    if (count!=taille/*donnee!= null && donnee != ""*/) {
    var nb=tab.push(donnee);

    }
}
//affichage du nombre de données et de la liste
 console.log(tab.length)
//####### taille du tableau #######
    for (index in tab) {
        console.log("liste de données : "+tab[index]);
    }
//########## affichage en tableau ##########
console.table([tab]);
