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

let jeunes=0;
let adultes=0;
let murs=0;
let ages;
let personnesJ = "personnes jeunes";
let personnesA = "personnes adultes";
let personnesM = "personnes d'age mur";

do
{
  ages = window.prompt("Entrez votre age");
  if ( ages < 20) {
    jeunes++;
    console.log(ages);
  }
  else if ((ages >= 20) && (ages <= 40))
  {
      adultes++
      console.log(ages);
  }
  else if ((ages >= 40 ) && (ages < 100)) {
    murs++;
    console.log(murs);
  }
}
while (ages < 100);

if (jeunes <= 1)
personnesJ = "personne jeune";
if (adultes <= 1)
personnesA = "personne adulte";
if (murs <= 1)
personnesM = "personne d'age mur";

window.alert("Il y a " + jeunes +" " +personnesJ +"\n" + "Il y a " + adultes +" " +personnesA +"\n" + "Il y a " + murs +" " +personnesM +"\n" + "dont "+ " 1 " + " centenaire ");
document.write("<font color=' #03f9f5 '>"+"Il y a " + jeunes +" " +personnesJ +"<br>" + "Il y a " + adultes +" " +personnesA +"<br>" + "Il y a " + murs +" " +personnesM +"<br> " + "dont "+ " 1 " + " centenaire "+"</font>");

////////// bouton retour accueil //////////
var btn1= document.getElementById("btn1");
btn1.addEventListener("click",clickbtn1);

function clickbtn1()
{
  document.location.href="index.html"; 
}