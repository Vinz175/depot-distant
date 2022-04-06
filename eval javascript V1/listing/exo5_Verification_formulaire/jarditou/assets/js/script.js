///////////////////////////////////////////////////////////////////////////////////////
///// Effectuez le contrôle de saisie de votre formulaire Jarditou en Javascript. /////
///// Lorsqu"une erreur est détectée, l"utilisateur doit en être informé grâce à //////
/////////////////// l"affichage d"un message sous le champ concerné. //////////////////
///////////// Le formulaire ne peut être envoyé que lorsque tout est bon.//////////////
///////////////////////////////////////////////////////////////////////////////////////

let formValid = document.getElementById("envoyer");

/////////// Variables nom ///////////
let nom = document.getElementById("nom");
let missNom = document.getElementById("missNom");
let nomValid = new RegExp("^[A-Za-z]+$");

/////////// Variables prénom ///////////
let prenom = document.getElementById("prenom");
let missPrenom = document.getElementById("missPrenom");
let prenomValid = new RegExp("^[A-Za-z]+$");

/////////// Variables sexe ///////////
let sexeF = document.getElementById('sexeF');
let sexeM = document.getElementById("sexeM");
let missSexe = document.getElementById("sexe");

/////////// Variables date de naissance ///////////
let date = document.getElementById("date");
let missDate = document.getElementById("missDate");
let dateValid = new RegExp("^[0-9]");

/////////// Variables Code postal ///////////
let code = document.getElementById("code_postal");
let missCode = document.getElementById("missCode");
let codeValid = new RegExp("^[0-9]{5}(?:-[0-9]{4})?$");

/////////// Variables mail ///////////
let mail = document.getElementById("email");
let missMail = document.getElementById("missMail");
let mailValid = new RegExp("^[A-Za-z0-9.-]+@[A-Za-z0-9.-]{2,}.[a-z]{2,4}$");

/////////// Variables sujet ///////////
let sujet = document.getElementById("sujet");
let missSujet = document.getElementById("missSujet");

/////////// Variables message ///////////
let message = document.getElementById("message");
let missMessage = document.getElementById("missMessage");
let messageValid = new RegExp("^[0-9A-Za-z çéàè@€*+%-êë]+$");    

/////////// Variables Checkbox ///////////
let checkbox = document.getElementById("checkbox");
let missCheckbox = document.getElementById("missCheckbox");

formValid.addEventListener("click", validation);
            
function validation(event)
{
//////////// vérification du nom ////////////
    //Si le champ est vide
    if (nom.validity.valueMissing){
        event.preventDefault();
        missNom.textContent = "Nom manquant";
        missNom.style.color = "red";
    //Si le format de données est incorrect
    }
    else if (nomValid.test(nom.value) == false){
        event.preventDefault();
        missNom.textContent = "Format incorrect";
        missNom.style.color = "orange";
    }

//////////// vérification du prénom ////////////
    else if (prenom.validity.valueMissing)
    {
    event.preventDefault();
    missPrenom.textContent = "Prénom manquant";
    missPrenom.style.color = "red";
//Si le format de données est incorrect
    }
    else if (prenomValid.test(prenom.value) == false)
    {
    event.preventDefault();
    missPrenom.textContent = "Format incorrect";
    missPrenom.style.color = "orange";
    }

//////////// vérification du sexe ////////////
    else  if((!this.form.sexeF.checked) && (!this.form.sexeM.checked))
    {
    missSexe.textContent = "Vous devez choisir un sexe.";
    missSexe.style.color = "red";
    //alert("Vous devez sélectionner votre sexe");

    }

//////////// vérification de la date de naissance ////////////
    else if (date.validity.valueMissing)
    {
    event.preventDefault();
    missDate.textContent = "Date de naissance manquante";
    missDate.style.color = "red";
//Si le format de données est incorrect
    }
    else if (dateValid.test(date.value) == false)
    {
    event.preventDefault();
    missDate.textContent = "Format incorrect";
    missDate.style.color = "orange";
    }

//////////// vérification du Code postal ////////////
    else if (code.validity.valueMissing)
    {
    event.preventDefault();
    missCode.textContent = "Code postal manquant";
    missCode.style.color = "red";
    //Si le format de données est incorrect
    }
    else if (codeValid.test(code.value) == false)
    {
    event.preventDefault();
    missCode.textContent = "Format incorrect";
    missCode.style.color = "orange";
    }

//////////// vérification du Mail////////////
    else if (mail.validity.valueMissing)
    {
    event.preventDefault();
    missMail.textContent = "Email manquant";
    missMail.style.color = "red";
//Si le format de données est incorrect
    }
    else if (mailValid.test(mail.value) == false)
    {
    event.preventDefault();
    missMail.textContent = "Format incorrect";
    missMail.style.color = "orange";
    }
//////////// vérification du sujet ////////////
    else if(document.getElementById("sujet").value == "veuillez_selectionner_un_sujet") 
    {
        event.preventDefault();
        missSujet.textContent = "Sélectionnez un sujet";
        missSujet.style.color = "red";
    //alert("Veuillez selectionner un sujet!");
    }
    
//////////// vérification de la question ////////////
    else if (message.validity.valueMissing)
    {
    event.preventDefault();
    missMessage.textContent = "Message manquant";
    missMessage.style.color = "red";
    //Si le format de données est incorrect
    }
    else if (messageValid.test(message.value) == false)
    {
    event.preventDefault();
    missMessage.textContent = "Format incorrect";
    missMessage.style.color = "orange";
    }


//////////// vérification checkbox ////////////
    else  if(!this.form.checkbox.checked)
    {
    missCheckbox.textContent = "Vous devez accepter le traitement de vos informations.";
    missCheckbox.style.color = "red";
    //alert("Vous devez accepter le traitement de vos informations.");

    }

}/// fin de fonction


