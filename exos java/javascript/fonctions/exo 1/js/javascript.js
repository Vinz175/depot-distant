///////////////////////////////////////////////////////////////////////////////////////////////
/////// produit(x, y) qui retourne le produit des 2 variables x, y passées en paramètre. ///////
///////////////////////////////////////////////////////////////////////////////////////////////


let x = prompt("Entrez un nombre ");
let y = prompt("Entrez un multiplicateur ");


function produit(x,y)
{
    var resultat = x * y
    return resultat;
}
var resultat2 = produit(x,y);

function cube(x)
{
    var resultatcube = x * x * x
    return resultatcube;
}
var resultatcube2 = cube(x);

console.log("Le produit de : " +x +" * " +y +" est égal à : "+resultat2);
console.log("le cube de : " +x +" est égal à : "+resultatcube2);

var img = document.getElementById("pap");
img.src = "src/img/papillon.jpg"
img.alt = "papillon"
img.title = "papillon"



let text = "Le produit de : " +x +" * " +y +" est égal à : "+resultat2;
document.getElementById("myP").innerHTML = text;
let resultatcube ="le cube de : " +x +" est égal à : "+resultatcube2
document.getElementById("myDIV").innerHTML = resultatcube;


      