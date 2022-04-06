///////////////////////////////////////////////////////////////////////////////////////////////
/////// Créer le programme qui fournira un menu permettant d’obtenir les fonctionnalités //////
////////////////////// suivantes à partir d’un tableau à une dimension : //////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
////////////////////// Affichage du contenu de tous les postes du tableau,/////////////////////
////////////// Affichage du contenu d’un poste dont l’index est saisi au clavier, /////////////
///////////////// Affichage du maximum et de la moyenne des postes du tableau /////////////////
///////////////////////////////////////////////////////////////////////////////////////////////


/////// produit(x, y) qui retourne le produit des 2 variables x, y passées en paramètre. ///////

let x = prompt("valeur 1 ");
let y =prompt("valeur 2 ");


function produit(x,y)
{
    var resultat = x * y
    return resultat;

}
var resultat2 = produit(x,y);
console.log(+resultat2);


/*

    une fonction GetInteger pour lire un entier au clavier,
    une fonction InitTab pour créer et initialiser l’instance de tableau : le nombre de postes souhaité sera entré au clavier,
    une fonction SaisieTab pour permettre la saisie des différents postes du tableau,
    une fonction AfficheTab pour afficher tous les postes du tableau,
    une fonction RechercheTab pour afficher le contenu d’un poste de tableau dont le rang est saisi au clavier
    une fonction InfoTab qui affichera le maximum et la moyenne des postes.
*/