/* demande du nom */
var nom = window.prompt("Saisissez votre nom");
/* demande du prenom */
var prenom = window.prompt("Saisissez votre prénom");

/* choix sexe et boite de dialogue bonjour */
if (window.confirm("Etes-vous un homme ?") ==true)
    {
        alert("Bonjour, Monsieur "+prenom+" "+nom+"\n \n Bienvenue sur notre site");
    }
else {
        alert("Bonjour, Madame "+prenom+" "+nom+"\n \n Bienvenue sur notre site");
}




/*   Créer un script qui demande successivement à l'utilisateur son nom puis son prénom.
    La page demande ensuite à l'utilisateur s'il est un homme ou une femme.
    Enfin, la page affiche les informations sur l'utilisateur.
*/