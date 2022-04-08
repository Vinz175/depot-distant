let formValid = document.getElementById("envoyer");

//// variables ////
let societe = document.getElementById("societe");
let societeValid = new RegExp("^[a-zA-Z]{1}");

let contact = document.getElementById("contact");
let contactValid = new RegExp("^[a-zA-Z]{1}");

let cp = document.getElementById("cp");
let cpValid = new RegExp("^[0-9]{5}?$")

let ville = document.getElementById("ville");
let villeValid = new RegExp("^[a-zA-Z]{1}");

let email = document.getElementById("mail");
let mailValid = new RegExp("@");

formValid.addEventListener("click",validation);
function validation(event)
{
///// societe
if (societe.validity.valueMissing) 
    {
        event.preventDefault();
        alert("Entrez le nom de la société s.v.p")
    }

///// personne a contacter
if (contact.validity.valueMissing) 
    {
        event.preventDefault();
        alert("Entrez le nom de la personne consernée s.v.p")
    }

///// code postal
if (cp.validity.valueMissing) 
{
    event.preventDefault();
    alert("Entrez votre code postal a 5 chiffres s.v.p")
}

///// ville
if (ville.validity.valueMissing) 
    {
        event.preventDefault();
        alert("Entrez le nom de votre ville s.v.p")
    }

///// e-mail
if (mail.validity.valueMissing) 
    {
        event.preventDefault();
        alert("Entrez votre E-mail s.v.p")
    }
    else if (mailValid.test(mail.value) == false)
    {
        event.preventDefault();
        alert("Entrez correctement votre E-mail s.v.p")

    }


}