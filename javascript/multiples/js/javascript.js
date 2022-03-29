//// multiples
    
var i = 1;
var n =  parseInt(prompt("Saisissez un premier nombre"),"0");
var x = parseInt(prompt("Saisissez un second nombre"),"0");

console.log("Calcul des multiples");
console.log("=============================");


while (i <= n) 
{   
    // Exécute le calcul et stocke le résultat   
    // dans une variable nommée ‘resultat’  
    resultat = i * x;

    // A chaque tour, on affiche le résultat courant à l’utilisateur
    console.log("Le résultat de "+i+"x "+x+" est : "+resultat);

    // A chaque tour, on ajoute +1 à la variable i  
    i++; 
}

// instructions exécutées après le for (i vaut 10)
console.log("fin de la boucle");


/* Ecrire un programme qui calcule les N premiers multiples d'un nombre entier X,
 N et X étant entrés au clavier.

Exemple pour N=5 et X=7 :

1 x 7 = 7
2 x 7 = 14
3 x 7 = 21
4 x 7 = 28
5 x 7 = 35

Il est demandé de choisir la structure répétitive (for, while, do...while) 
la mieux appropriée au problème.*/