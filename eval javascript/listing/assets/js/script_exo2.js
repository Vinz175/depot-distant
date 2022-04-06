///////////////////////////////////////////////////////////////////////////////////////////////
//////////////// Ecrivez une fonction qui affiche une table de multiplication. ////////////////
//// Votre fonction doit prendre un paramètre qui permet d'indiquer quelle table afficher. ////
///////////////////// Par exemple, TableMultiplication(7) doit afficher : /////////////////////
////////////////////////////////////////// 1 x 7 = 7 //////////////////////////////////////////
////////////////////////////////////////// 2 x 7 = 14 /////////////////////////////////////////
//////////////////////////////////////// 3 x 7 = 21 ... ///////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////

let nb = window.parseInt(prompt("Entrez la table de multiplication a afficher"));

let message="";
let message2="";
function mult(nb)
{
    let i = 0;

    for (i=0; i<=10; i++)
    {
        resultat = nb * i;
        //console.log(+i+" * "+nb+" = "+resultat);

        //document.write(+i+" * "+nb+" = "+resultat+"<br>");

        
        message=message+i+" * "+nb+" = "+resultat+"\n";
        message2=message2+(+i+" * "+nb+" = "+resultat+"<br>")
        //console.log(message);
        //alert(+i+" * "+nb+" = "+resultat)
    }

    //alert(message);
}



mult(nb);

var bouton1= document.getElementById("Id_btn1");
bouton1.addEventListener("click",clickbtnbdd);

function clickbtnbdd(){

    alert(message);
}

var bouton2= document.getElementById("Id_btn2");
bouton2.addEventListener("click",clickbtncons);

function clickbtncons(){

    console.log(message);
}

var bouton3= document.getElementById("Id_btn3");
bouton3.addEventListener("click",clickbtnnav);

function clickbtnnav(){

    document.write(message2);
}

var btn1= document.getElementById("btn1");
btn1.addEventListener("click",clickbtn1);

function clickbtn1()
{

    document.location.href="index.html"; 
}
/////////// Merci Manu pour l'explication des différents type d'affichages ///////////