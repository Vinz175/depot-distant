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
//////////////////////////////////////////////////////////
1- Ecrire un programme qui lit le fichier et qui construit
une liste de liens hypertextes.
//////////////////////////////////////////////////////////
*/    $fp = fopen("liens.txt", "r");
  
// Boucle jusqu'à la fin du fichier
while (!feof($fp)) 
{ 
    // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne  
    $ligne = fgets($fp, 4096); 
    //echo $ligne."<br>";
    echo "<a href=>".$ligne."<br> </a>"; 
} 
   ?>
</body>
</html>