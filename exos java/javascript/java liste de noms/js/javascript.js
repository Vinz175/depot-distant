/* demande des prénom */


var prenoms = [];
var c = 1;
let prenom ;

prenom = prompt('Entrer le prénom n° ' + c);
prenoms.push(prenom);
// console.log(prenom);

while(prenom!="" && prenom!=null)
{

    c++;

    prenom = prompt('Entrer le prénom n° ' + c);

    //alert("prenom :"+prenom+"-");
    if (prenom != null && prenom != "") {
        prenoms.push(prenom);
     
    }
    
}

// affichage du nombre et de la liste des prenoms
console.log(prenoms.length)

 for (index in prenoms) {
     console.log(prenoms[index]);
 }
//ou
//console.table([prenoms])
//for (element of prenoms) console.log(element);



//nb.length; //renvoie le nombre de prenom


/* Créer une page HTML qui demande à l'utilisateur un 
prénom.
La page doit continuer à demander des prénoms à 
l'utilisateur jusqu'à ce qu'il laisse le champ vide.
Enfin, la page affiche sur la console le nombre 
de prénoms et les prénoms saisis.
*/