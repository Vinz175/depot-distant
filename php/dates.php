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
date_default_timezone_set("Europe/Paris"); //avant toute manipulation de dates.

echo time();    //réccupération du timestamp en secondes depuis le 1er janvier 1970 0h00 00s GMT

// Date du jour
echo "Nous sommes le " . date("d/m/Y"); // Ici, la fonction date() retourne la date du jour sous la forme suivante 12/11/2018 correspondant au format (un pattern) indiqué en paramètre :
                                        // d : le jour, sur 2 chiffres,
                                        // m : le mois, sur 2 chiffres,
                                        // Y : l'année, sur 4 chiffres. 
                                        // Les slashes (/) servent uniquement à la présentation (séparateurs). On pourrait les remplacer par un tiret, un point ou deux points par exemple.

//Heure
echo date("H:i:s"); //Cet exemple affichera :
                    // H : heure, au format 24 avec zéros.
                    // i : minutes, avec zéros,
                    // s : secondes, avec zéros.

// L'objet DateTime
// on déclare une instance de l'objet PHP 'DateTime' :
$oDate = new DateTime();
//Ce code retourne automatiquement la date et heure de l'instant où il est exécuté. Si on exécute le code suivant (affichage du contenu de la variable $oDate) :
var_dump($oDate);

//Pour travailler sur une autre date que celle du jour, par exemple une valeur de date enregistrée en base de données, il faut passer la valeur en argument :
$oDate = new DateTime("01-01-2018");

// Formater une date existante
// $macolonne_sql est issue d'une requête SQL; avec pour valeur 2018-11-16 11:26:51 (parexemple)
$oDate = new DateTime($macolonne_sql);
echo $oDate->format("d/m/Y H:h:i");
// Ceci affichera 16/11/2018 11h26 (l'affichage des secondes a été volontairement omis).

// Récupérer les erreurs de l'objet DateTime
//L'objet DateTime permet de récupérer les erreurs grâce à DateTime::getLastErrors :
$DateTime = DateTime::createFromFormat("m/d/y", $Date);
$errors = DateTime::getLastErrors();
if (!empty($Errors["warning_count"]))
{
    return FALSE;
}

// Vérifier une date
$datePattern = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/";
$date = "2015-12-06";
if (preg_match($datePattern, $date))
{
    echo "Date ".$date." valide.<br>";
}
else
{
    echo "Date ".$date." erronée.<br>";
}
// Jusque là tout va bien, la date est valide.
// Essayez maintenant avec la date 32/13/2019 : la regex indique qu'elle est valide ! En effet, une expression régulière ne vérifie que le format, par les valeurs.
// Vous pouvez utilisez l'objet DateTime pour vérifier votre date

$oDate =  DateTime::createFromFormat("d/m/Y H:i:s", "17/25/1966 03:42:11");
$errors = DateTime::getLastErrors();
if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
    echo "ARGHHHH !";
}


    ?>
</body>
</html>