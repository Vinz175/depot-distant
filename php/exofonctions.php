<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*
-------------------------------------------------------------
La fonction doit prendre deux paramètres, le lien et le titre
 lien("https://www.reddit.com/", "Reddit Hug");
-------------------------------------------------------------
*/

function lien()
{
    static $lien = "https://www.reddit.com/";
    static $titre = "Reddit Hug";
echo $lien .$titre;
}
lien();
/*
function goreddit()
{
    echo '<a href="https://www.reddit.com">Reddit Hug</a>';
}
goreddit();*/
/*
-------------------------------------------------------------
Ecrivez une fonction qui calcul la somme des valeurs d'un tableau
La fonction doit prendre un paramètre de type tableau
-------------------------------------------------------------
*/
/*
$tab = array(4, 3, 8, 2);
function somme()
{
    global $tab;
echo array_sum($tab);
}
somme();
*/

/*
-------------------------------------------------------------
Créer une fonction qui vérifie le niveau de complexité d'un mot de passe
Elle doit prendra un paramètre de type chaîne de caractères. Elle retournera une valeur booléenne qui vaut true si le paramètre (le mot de passe) respecte les règles suivantes :
    Faire au moins 8 caractères de long
    Avoir au moins 1 chiffre
    Avoir au moins une majuscule et une minuscule
-------------------------------------------------------------
*//*
function complex_password($mdp)
{
//    global $resultat;
$majuscule = preg_match("@[A-Z]@", $mdp);
$minuscule = preg_match("@[a-z]@", $mdp);
$chiffre = preg_match("@[0-9]@", $mdp);
    if(!$majuscule || !$minuscule || !$chiffre || strlen($mdp) <= 8)
    {
        return false;
    }
    else
    return true;
}

$resultat = complex_password("TopSecret42");


    if ($resultat !=true)
    {
        echo "format incorrect";
    }
    else
    echo "Format correct";

//complex_password();
*/

?>
</body>
</html>

