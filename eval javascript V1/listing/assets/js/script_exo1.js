//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////// Il s'agit de dénombrer les age d'âge strictement inférieur ////////////////
//////////////// à 20 ans, les age d'âge strictement supérieur à 40 ans et /////////////////
//////////////// celles dont l'âge est compris entre 20 ans et 40 ans (20 ans et /////////////////
/////////////////////////////////////// 40 ans y compris). ///////////////////////////////////////
//////////////////////// Le programme doit demander les âges successifs. /////////////////////////
//////// Le comptage est arrêté dès la saisie d'un centenaire. Le centenaire est compté. /////////
///////////// Donnez le programme Javascript correspondant qui affiche les résultats /////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
window.alert("Cliquez pour commencer")

var jeunes=0;
var adultes=0;
var murs=0;
var ages;
do
{
  ages = window.prompt("Entrez votre age");
  if ( ages <20) {
    jeunes++;
    console.log(ages);
  }
  else if ((ages>=20) && (ages<=40))
  {
      adultes++
      console.log(ages);
  }
  else if ((ages >=40 ) && (ages <100)) {
    murs++;
    console.log(murs);
  }
}
while (ages < 100);


if (jeunes == 1 )
{
window.alert("Il y a " + jeunes + " personne jeune\n " + "Il y a " + adultes + " personnes adulte\n " + "Il y a " + murs + "" +" personne d'age mûr\n " + " dont "+ " 1 " + "" + " centenaire ");
document.write("<font color=' #03f9f5 '>"+"Il y a " + jeunes + " personne jeune <br> " + "Il y a " + adultes + " personnes adulte <br> " + "Il y a " + murs + "" +" personnes d'age mûr <br> " + " dont "+ " 1 " + "" + " centenaire "+"</font>");
}
else if (adultes == 1)
{
window.alert("Il y a " + jeunes + " personnes jeunes\n " + "Il y a " + adultes + " personne adulte\n " + " Il y a " + murs + "" +" personnes d'age mûr\n " + " dont "+ " 1 " + "" + " centenaire ");
document.write("<font color=' #03f9f5 '>"+"Il y a " + jeunes + " personnes jeunes <br> " + "Il y a " + adultes + " personne adulte <br> " + "Il y a " + murs + "" +" personnes d'age mûr <br> " + " dont "+ " 1 " + "" + " centenaire "+"</font>");
}

else if (murs == 1)
{
window.alert("Il y a " + jeunes + " personnes jeunes\n " + "Il y a " + adultes + " personnes adulte\n " + "Il y a " + murs + "" +" personne d'age mûr\n " + " dont "+ " 1 " + "" + " centenaire ");
document.write("<font color=' #03f9f5 '>"+"Il y a " + jeunes + " personnes jeunes <br> " + "Il y a " + adultes + " personnes adulte <br> " + "Il y a " + murs + "" +" personne d'age mûr <br> " + " dont "+ " 1 " + "" + " centenaire "+"</font>");
}

else if ((jeunes == 1) && (adultes == 1))
{
window.alert("Il y a " + jeunes + " personne jeune\n " + "Il y a " + adultes + " personne adulte\n " + " Il y a " + murs + "" +" personnes d'age mûr\n " + " dont "+ " 1 " + "" + " centenaire ");
document.write("<font color=' #03f9f5 '>"+"Il y a " + jeunes + " personne jeunes <br> " + "Il y a " + adultes + " personne adulte <br> " + "Il y a " + murs + "" +" personnes d'age mûr <br> " + " dont "+ " 1 " + "" + " centenaire "+"</font>");
}

else if ((jeunes == 1) && (murs == 1))
{
window.alert("Il y a " + jeunes + " personne jeune\n " + "Il y a " + adultes + " personnes adulte\n " + "Il y a " + murs + "" +" personne d'age mûr\n " + " dont "+ " 1 " + "" + " centenaire ");
document.write("<font color=' #03f9f5 '>"+"Il y a " + jeunes + " personne jeunes <br> " + "Il y a " + adultes + " personnes adulte <br> " + "Il y a " + murs + "" +" personne d'age mûr <br> " + " dont "+ " 1 " + "" + " centenaire "+"</font>");
}

else if ((adultes == 1) && (murs == 1))
{
window.alert("Il y a " + jeunes + " personnes jeune\n " + "Il y a " + adultes + " personne adulte\n " + "Il y a " + murs + "" +" personne d'age mûr\n " + " dont "+ " 1 " + "" + " centenaire ");
document.write("<font color=' #03f9f5 '>"+"Il y a " + jeunes + " personnes jeunes <br> " + "Il y a " + adultes + " personne adulte <br> " + "Il y a " + murs + "" +" personne d'age mûr <br> " + " dont "+ " 1 " + "" + " centenaire "+"</font>");
}
else if ((adultes == 1) && (adultes == 1) && (murs == 1))
{
window.alert("Il y a " + jeunes + " personne jeune\n " + "Il y a " + adultes + " personne adulte\n " + "Il y a " + murs + "" +" personne d'age mûr\n " + " dont "+ " 1 " + "" + " centenaire ");
document.write("<font color=' #03f9f5 '>"+"Il y a " + jeunes + " personne jeunes <br> " + "Il y a " + adultes + " personne adulte <br> " + "Il y a " + murs + "" +" personne d'age mûr <br> " + " dont "+ " 1 " + "" + " centenaire "+"</font>");
}



else
{
window.alert("Il y a " + jeunes + " personne(s) jeunes\n " + "Il y a " + adultes + " personne(s) adulte\n " + " Il y a " + murs + "" +" personne(s) d'age mûr\n " + " dont "+ " 1 " + "" + " centenaire ");
document.write("<font color=' #03f9f5 '>"+"Il y a " + jeunes + " personne(s) jeunes<br> " + "Il y a " + adultes + " personne(s) adulte<br> " + " Il y a " + murs + "" +" personne(s) d'age mûr<br> " + " dont "+ " 1 " + "" + " centenaire "+"</font>");
}

var btn1= document.getElementById("btn1");
btn1.addEventListener("click",clickbtn1);

function clickbtn1()
{
    document.location.href="file:///home/vinc/Documents/eval%20javascript/listing/index.html"; 
}