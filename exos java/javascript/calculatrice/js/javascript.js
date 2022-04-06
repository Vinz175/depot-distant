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
    if (nb2 == 0)
    {alert("votre second nombre doit etre différent de 0")
}
    else if (ope = nb1 / nb2)
{
    alert("resultat : " +ope)
}
break;
default:
    alert("entrez un opérateur valide")
}
