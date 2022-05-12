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
$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);
/*
-------------------------------------------------------------------------
Affichez la liste des régions (par ordre alphabétique) suivie du nom des 
départements
-------------------------------------------------------------------------
*/

var_dump($departements["Bretagne"][1]);

$regions = array();
var_dump($regions);
foreach ($departements as $cle=>$value) {
    array_push($regions, $cle);
}

// var_dump($regions);
asort($regions);
// var_dump($regions);


// foreach ($regions as $region) {
//     var_dump($region);
// }

echo "Departements <br><table>";//<tr>";

foreach ($regions as $region) {
    
    // var_dump($departements[$region]);
    echo "<tr>";
    echo "<th>".$region."</th>";

    foreach ($departements[$region] as $dpt) {
    echo "<td>$dpt</td>";
    }

    echo "</tr>";
 }

 echo "</table>";




// echo "Departements <br><table>";//<tr>";
// foreach($departements as $cle=>$valeur){
    
//     //echo str_pad($valeur, 15).' : '.$cle.'<br>';      affichage en liste
//     echo "<tr>";
//     echo "<th>".$cle."</th>";

//     foreach ($valeur as $dpt) {
//     echo "<td>$dpt</td>";
//     }

//     echo "</tr>";
//  }
//  echo "</tr>";
 


//  echo "</table>";


/*
 -------------------------------------------------------------------------
 Affichez la liste des régions suivie du nombre de départements
 -------------------------------------------------------------------------
*/







?>
</body>
</html>