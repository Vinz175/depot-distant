/////////////////////////////////////////////////////////////////////////////////////
/// Le clic sur le bouton Contrôler engendre l’appel à la fenêtre d’information. ////
/////////////////////////////////////////////////////////////////////////////////////


//let texte = window.prompt("Saisissez un texte puis pressez le bouton 'controle'");

document.querySelector('#button1').onclick = function() 
{
    alert('Vous avez cliqué !');
} 