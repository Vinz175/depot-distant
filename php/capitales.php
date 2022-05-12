<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="2"> 
<?php
$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);
/*
-------------------------------------------------------------------------------
Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.
-------------------------------------------------------------------------------
*//*
ksort($capitales); ///ksort le tri se fait sur les valeurs
echo "Capitales <br>";
foreach($capitales as $cle=>$valeur){
    //echo str_pad($cle, 15).' : '.$valeur.'<br>';    affichage en liste
    echo "<tr>";
    echo "<td>".$cle."</td>";
    echo "<td>".$valeur."</td>";
    echo "</tr>";
 }

/*
-------------------------------------------------------------------------------
Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale.
-------------------------------------------------------------------------------
*//*
asort($capitales);
echo "Capitales <br>";
foreach($capitales as $cle=>$valeur){
    //echo str_pad($valeur, 15).' : '.$cle.'<br>';      affichage en liste
    echo "<tr>";
    echo "<td>".$valeur."</td>";
    echo "<td>".$cle."</td>";
    echo "</tr>";
 }

/*
 -------------------------------------------------------------------------------
 Affichez le nombre de pays dans le tableau.
 -------------------------------------------------------------------------------
*//*
$nb = count($capitales);
echo "Votre tableau contient " .$nb. " pays";

/*
-------------------------------------------------------------------------------
Supprimer du tableau toutes les capitales ne commençant par la lettre 'B', 
puis affichez le contenu du tableau.
 -------------------------------------------------------------------------------
*/
$s = strstr ($capitales, "b");

?>
</table>
</body>
</html>