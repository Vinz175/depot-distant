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
// 1- Trouvez le numéro de semaine de la date suivante : 14/07/2019. 
/*
$date = new DateTime("2019/07/14");
$date2 = $date->format("d/m/y");
$prem = new DateTime("2019/01/01");
$prem2 = $prem->format("d/m/y");

$jours = $prem->diff($date);
echo $jours->format("Du ".$prem2 ." au " .$date2 ." il y a %a jours <br>");

echo floatval($jours);
$sem = (int)($jours / 7);
echo "La date du " .$date2 ." est dans la semaine numéro " .$sem ." de l'année 2019";
*/
/*
// avec une fonction
function nbrSemaines($date1, $date2)
{
    if ($date1 > $date2) 
    {
        return false;
    }
    else
    {
        $debut = DateTime::createFromFormat('d/m/Y', $date1);
        $fin = DateTime::createFromFormat('d/m/Y', $date2);
        return floor($debut->diff($fin)->days/7);
    }
}

echo "La date du 14/07/2019 est dans le numéro de semaine ".nbrSemaines('01/01/2019', '14/07/2019')." de l'année 2019";
*/
// sans fonction
$fin =  "14/07/2019";
$fin2 = DateTime::createFromFormat('d/m/Y', $fin);
$debut = "01/01/2019";
$debut2 = DateTime::createFromFormat('d/m/Y', $debut);
echo "la date du " .$fin ." est dans la semaine numéro " .$debut2->diff($fin2)->days/7 ." de l'année 2019";


/*
$date = '14/07/2019';
echo $date. "<br>";
$dateTime = DateTime::createFromFormat('d/m/Y', $date);
$DateInt = $dateTime->format('Y/m/d');
echo $DateInt. "<br>";
echo date('W',strtotime('$DateInt'));
*/
// 2- Combien reste-t-il de jours avant la fin de votre formation ?
/*
$fin = new DateTime("2022/06/16");
$fin2 = $fin->format("d/m/y");
$jour =  new DateTime ("now");
$jour2 = $jour->format('d/m/y');

echo "Nous sommes le  ".$jour2."<br>";
echo "Vous arretez votre formation le " .$fin2 ."<br>";

$reste = $fin->diff($jour);
echo $reste->format("il vous reste  %R%a jours de formation");
*/
// 3- Comment déterminer si une année est bissextile ?



// 4- Montrez que la date du 32/17/2019 est erronée.
/*
$oDate =  DateTime::createFromFormat("d/m/Y", "32/17/2019");

$errors = DateTime::getLastErrors();

if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
    echo "Vous avez selectionné une mauvaise date !";
}
*/
// 5- Affichez l'heure courante sous cette forme : 11h25.
//echo date("H\hi");

// 6- Ajoutez 1 mois à la date courante.
//echo date ("d/m/y",strtotime("1 month"));

// 7- Que s'est-il passé le 1000200000 ?
/*
$date = date('d-m-Y H:i:s', 1000200000);
echo "La date est : $date. <br>";
echo "Dans le ciel de New York, deux avions de ligne s'encastrent dans les tours du World Trade Center."
*/

    ?>
</body>
</html>