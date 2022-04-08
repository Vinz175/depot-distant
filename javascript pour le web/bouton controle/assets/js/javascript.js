

let saisie = document.getElementById("saisie");
let controle = document.getElementById("controle");

controle.addEventListener("click", function()
{
    alert("Vous avez saisi "+saisie.value);
});
