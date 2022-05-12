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
