//// demande des chiffres


var nbs = [];
var z = 0;
var c = 1; //compteur
var nb ;
var sum = 0;
let sum2 =0;
var moy = 0;

while(nb != z)
{
    nb = parseInt(prompt("Saisissez nombre " +c));
    c++;
    if (nb != z) {
        nbs.push(nb);
    }
}


for (let i=0;i<nbs.length ; i++){
    console.log(nbs[i])
    sum += nbs[i]
}
console.log("la somme vaut "+sum)

moy = sum / nbs.length
console.log("la moyenne de vos nombres vaut " +moy)


//nbs.forEach((n) => sum2 += n)

   


//console.log("la somme2 vaut "+sum2)
    /* for(i=0, i<nbs.length, i++)
     {
    (sum += nbs[i]);
     }*/         








//Ecrire un programme qui saisit des entiers et en affiche la somme et la 
//moyenne (on arrête la saisie avec la valeur 0).