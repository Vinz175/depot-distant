//// voyelles
    
/*let nom = prompt("entrez un nom");
//console.log(nom)
let count = 0 ;//compteur
//let pos = nom.indexOf("i,e")
let voyelles =["a,e,i,o,u,y"];

console.log(nom.length);
// calcule le nombre de caracteres
console.log(nom.substring());
//substring vide pour extraire les caracteres jusu'a la fin de la chaine


console.log(nom.indexOf("i"));
//console.log(nom.indexOf("e"));
*/

let nom = prompt("entrez un nom");
let voyelles = ["a","e","i","o","u","y"];
let count = 0;

console.log("Votre prénom est constitué de " +nom.length +" lettres");
// calcule le nombre de caracteres

console.log("Votre prénom est : " +nom.substring());
//substring vide pour extraire les caracteres jusqu'a la fin de la chaine

for (let i=1; i<nom.length -1; i++)
{
    //if (voyelles.includes(nom.toLowerCase()))
    //{
 console.log(voyelles[i])
 count++;
    //}
}
console.log("Votre prénom est contitué de " +count +" voyelles")


//myVar.length
//myVar.substring(p,n)
//myVar.indexOf(chaine)
/*
myVar.length : retourne le nombre de lettres de la chaîne myVar.
myVar.substring(p,n) : extrait d'une chaîne donnée une sous-chaîne
 de n caractères à partir de la position p (attention, en Javascript,
     le 1er caractère se trouve à la position 0)
myVar.indexOf(chaine) : retourne le rang de la première occurrence 
de chaîne dans la variable myVar donnée (si non trouvé : -1). 
*/