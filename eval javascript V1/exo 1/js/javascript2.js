//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////// Il s'agit de dénombrer les personnes d'âge strictement inférieur ////////////////
//////////////// à 20 ans, les personnes d'âge strictement supérieur à 40 ans et /////////////////
//////////////// celles dont l'âge est compris entre 20 ans et 40 ans (20 ans et /////////////////
/////////////////////////////////////// 40 ans y compris). ///////////////////////////////////////
//////////////////////// Le programme doit demander les âges successifs. /////////////////////////
//////// Le comptage est arrêté dès la saisie d'un centenaire. Le centenaire est compté. /////////
///////////// Donnez le programme Javascript correspondant qui affiche les résultats /////////////
//////////////////////////////////////////////////////////////////////////////////////////////////


let age ;
var ages = [];


age = window.parseInt(prompt("Saisissez votre age"));
ages.push(age)

while (age > 0 && age < 19)
{
    //alert("boucle while"); ----- ok
    console.log("vous avez - de 20 ans");
    age = window.parseInt(prompt("Saisissez votre age"));
    ages.push(age)
}
if (age>=20 && age<=40)
{
    //alert("boucle if"); -----ok
    console.log("vous avez entre 20 et 40 ans");
    age = window.parseInt(prompt("Saisissez votre age"));
    ages.push(age)

}
else if(age>=41 && age<=100)
{
    //alert("boucle elseif"); -----ok
    console.log("Vous avez entre 41 et 100 ans");
    age = window.parseInt(prompt("Saisissez votre age"));
    ages.push(age)
}
else (age >= 101 && age<= 200)
{
    //alert("boucle else"); -----ok
    console.log("Vous avez plus de 101 ans");
    ages.push(age)
}

//console.log(ages.length)
console.table([ages])

 for (index in ages)
{
     console.log(ages[index]);
}