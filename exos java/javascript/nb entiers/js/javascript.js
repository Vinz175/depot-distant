var i=0;


console.log("affichage de nombre inférieurs a N");
console.log("=============================");

var nombre =window.prompt("entrez un nombre");

for (i=0; i<=nombre; i++)
{
    resultat = nombre - i;

    console.log(+resultat);
}

// instructions exécutées après le for (i vaut 10)
console.log("fin de la boucle");
//Ecrire un programme qui affiche les nombres inférieurs à N.