<!--
--------------------------------------------------------------------------------------
Créez un tableau associant à chaque mois de l’année le nombre de jours du mois.
Utilisez le nom des mois comme clés de votre tableau associatif.
Affichez votre tableau (dans un tableau HTML) pour faire apparaitre sur chaque ligne
 le nom du mois et le nombre de jours du mois.
Triez ensuite votre tableau en utilisant comme critère le nombre de jours, puis 
affichez le résultat.
--------------------------------------------------------------------------------------
-->
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
        $tableau = array("Janvier" => 31,
                        "Février" => 28,
                        "Mars" => 31,
                        "Avril" => 30,
                        "Mai" => 31,
                        "Juin" => 30,
                        "Juillet" => 31,
                        "Août" => 31,
                        "Septembre" => 30,
                        "Octobre" => 31,
                        "Novembre" => 30,
                        "Décembre" => 31
                        ); 
            foreach ($tableau as $key => $value) 
            { 
                echo "<tr>";
                echo "<td>".$key."</td>";
                echo "<td>".$value."</td>";
                echo "</tr>";
           } 


    ?>
    </table>
</body>
</html>