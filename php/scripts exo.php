// 1- Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, 
par ordre croissant : 1 3 5 7...

<?php
$a = 0;
for ($a = 1; $a < 150; $a++) { 


if ($a %2 == 1)
    echo $a;
}
?>

// 2- Écrire un programme qui écrit 500 fois la phrase Je dois faire des 
sauvegardes régulières de mes fichiers


<?php
$a = 0;
for ($a = 1; $a < 500; $a++) { 
echo "Je dois faire des sauvegardes régulières de mes fichiers\n";
}
?>

// 3- Ecrire un script qui affiche la table de multiplication 
totale de {1,...,12} par {1,...,12} dans un tableau HTML, 
le résultat doit être le suivant : 

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
echo '<table border=\'1\'>'; 
        echo "<tr><td></td>";
        //la première ligne
        for ($i=0;$i<=12;$i=$i+1)
        {
        echo"<th>".$i."</th>";
        }
        echo"</tr>";

        for ($j=0;$j<=12;$j++)
        {
        echo"<tr><th>".$j."</th>";
        for($k=0;$k<=12;$k++)
        {
        $p=$j*$k;
        echo"<td>".$p."</td>";
        }
        echo"</tr>\n";
        }
    ?> 

 
</body>
</html>
