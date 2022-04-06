/* demande du nombre */
var nombre = window.prompt("Saisissez votre nombre");

if (nombre %2 ==0)
{
alert("votre nombre est pair");
}
else
{
alert("votre nombre est impair");
}

/* demande de l'age */
today = 2022

var annee = window.prompt("Saisissez votre année de naissance");
(age = today - annee)
if((age = today - annee) && (age>=18))
{
alert("Vous avez " + age + " ans, vous êtes majeur.");
}
else
{
alert("Vous avez " + age + " ans, vous êtes mineur.");
}




/* demande de nombre */

var nb1 = parseInt(prompt("Saisissez un premier nombre"),"0");
var nb2 = parseInt(prompt("Saisissez un second nombre"),"0");

var ope = window.prompt("Saisissez un opérateur +,-,*,ou,/");

switch (ope)
{
case '+' :
(ope = nb1 + nb2)
alert("Resultat : " +ope)
break;
case '-':
(ope = nb1 - nb2)
alert("resultat : " +ope)
break;
case '*':
(ope = nb1 * nb2)
alert("resultat : " +ope)
break;
case '/':
    (ope = nb1 / nb2)
alert("resultat : " +ope)
break;
default:
    alert("entrez un opérateur valide")
}



