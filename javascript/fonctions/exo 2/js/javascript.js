///////////////////////////////////////////////////////////////////////////////////////////////
///////// Concevez la fonction strtok() qui prend 3 paramètres str1, str2, n en entrée ////////
///////// et renvoie une chaîne de caractères : str1 est composée d'une liste de mots /////////
/////////séparés par le caractère str2. strtok() sert à extraire le nième mot de str1. ////////
///////////////////////////////////////////////////////////////////////////////////////////////


let coord = prompt("saisissez votre nom , prénom, ville, code postal");


function strtok(str1, str2, n)
{
    var str = str1.split(str2)
    return str[n-1]
}
 
console.log(strtok(coord, ",", 2));


