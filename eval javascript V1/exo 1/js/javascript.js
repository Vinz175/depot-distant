//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////// Il s'agit de dénombrer les age d'âge strictement inférieur ////////////////
//////////////// à 20 ans, les age d'âge strictement supérieur à 40 ans et /////////////////
//////////////// celles dont l'âge est compris entre 20 ans et 40 ans (20 ans et /////////////////
/////////////////////////////////////// 40 ans y compris). ///////////////////////////////////////
//////////////////////// Le programme doit demander les âges successifs. /////////////////////////
//////// Le comptage est arrêté dès la saisie d'un centenaire. Le centenaire est compté. /////////
///////////// Donnez le programme Javascript correspondant qui affiche les résultats /////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
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
  else if ((ages >=40 ) && (ages <=100)) {
    murs++;
    console.log(murs);
  }
}
while (ages < 100);
 
window.alert("Il y a " + jeunes + " personne(s) jeunes\n " + "Il y a " + adultes + " personne(s) adulte\n " + " Il y a " + murs + "" +" personne(s) d'age mûr\n " + " dont "+ " 1 " + "" + " centenaire ");

