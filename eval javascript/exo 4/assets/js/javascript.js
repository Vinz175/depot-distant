//////////////////////////////////////////////////////////////////////////////////////////////////
///// A partir de la saisie du prix unitaire noté PU d'un produit et de la quantité commandée ////
/////// QTECOM, afficher le prix à payer PAP, en détaillant la remise REM et le port PORT, ///////
////////////////////////////////////////// sachant que : /////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////  TOT = ( PU * QTECOM ) //////////////////////////////////// 
////////// la remise est de 5% si TOT est compris entre 100 et 200 € et de 10% au-delà /////////// 
///////// le port est gratuit si le prix des produits ( le total remisé ) est supérieur //////////
/////////////////////// à 500 €. Dans le cas contraire, le port est de 2% //////////////////////// 
///////////////////////// la valeur minimale du port à payer est de 6 € //////////////////////////
///////// Testez tous les cas possibles afin de vous assurez que votre script fonctionne./////////
//////////////////////////////////////////////////////////////////////////////////////////////////

let PU = 0;   //prix unitaire
let qtecom = 0;   //quantité commandée
let pap = 0;  //prix a payer
let rem ;  //remise
let port = 0; //port
let tot ;

do
{

port=0;

pu = window.prompt("Saisissez un prix");
qtecom = window.prompt("Saisissez une quantité");

tot = pu * qtecom;
console.log(tot);

    if (tot < 100)
    {
    console.log("port 6€");
    rem = 0;
    port = 6;
    console.log(rem);
    pap = tot + port;
    }
    else if ((tot > 100) && (tot <= 200))
    {
    console.log("Votre remise est de 5%")
    rem = ((tot * 5) /100);
    console.log(+rem);
    port = ((tot * 2) /100);
        if(port < 6, port = 6)
        pap = tot -rem + port;
    }
    else if ((tot > 200) && (tot < 500))
    {
    console.log("votre remise est de 10%");
    rem = ((tot * 10) /100);
    console.log(rem);
    port = ((tot * 2) /100);
    pap = tot -rem + port;
    }
    else if (tot >500)
    {
    console.log("le port est gratuit");
    rem = ((tot * 10) /100);
    totrem = tot - rem;
    console.log("total remisé"+totrem);
        if (totrem <= 500)
        {
            port = ((totrem * 2) /100);
            console.log("port" +port);
            pap = tot -rem + port;
        }
        else
        {   
            pap = tot - rem;
            console.log(pap);
        }
    }
    window.alert("Prix total "+tot +"€"+" , remise "+rem +"€"+" , frais de port "+port +"€"+ "\n Soit un coût total de "+ pap +"€." )

}

//redo();
while (window.confirm("Voulez-vous recommencer ?") == true)


//window.alert("Prix total "+tot +"€"+" , remise "+rem +"€"+" , frais de port "+port +"€"+ "\n Soit un coût total de "+ pap +"€." )


//voulez-vous recommencer?//
/*
function redo()
{
    if (window.confirm("Voulez-vous recommencer ?") == true)
    {
    pu = window.prompt("Saisissez un prix");
    qtecom = window.prompt("Saisissez une quantité");
    calcul();
    }
}

calcul();
*/