///////////////////////////////////////////////////////////////////////////////////////////////
///// Un prénom est saisi au clavier. On le recherche dans le tableau tab donné ci-après. /////
/// Si le prénom est trouvé, on l'élimine du tableau en décalant les cases qui le suivent /////
////// , et en mettant à blanc la dernière case. Si le prénom n'est pas trouvé un message /////
////////////////////// d'erreur apparait et aucun prénom ne se supprime. //////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////


var tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];
var prenom = window.prompt("Veuillez choisir un prénom. ")

function search()
{
    if (tab.includes(prenom))
    {
	tab.splice(tab.indexOf(prenom),1);
	tab.push(" ");
	console.log(tab);
    console.table(tab);
    research();
    }
    else
    {
    console.log("Le prénom saisi n'est pas dans la liste");
    alert("Le prénom saisi n'est pas dans la liste");
    research();
    }

////////////// Fonction pour rechercher a nouveau //////////////
    function research()
    {
        if (window.confirm("Voulez-vous continuer ?") ==true)
        {
        prenom = window.prompt("Veuillez choisir un prénom. ");
        search();
        console.table(tab);
        }
    }
    
}
search();
console.table(tab);
document.write("<font color=' #03f9f5 '>"+(tab)+"</font>");

///////// Bouton accueil /////////
var btn1= document.getElementById("btn1");
btn1.addEventListener("click",clickbtn1);

function clickbtn1()
{

    document.location.href="index.html"; 
}
