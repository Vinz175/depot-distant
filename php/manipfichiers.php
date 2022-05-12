<?php

$fp = fopen("/home/rasmus/file.txt", "r"); 
$fp = fopen("../exemple.txt","a"); 
$fp = fopen("http://www.php.net/", "r"); 
$fp = fopen("ftp://user:password@example.com/", "w"); 


// compteur
    // On ouvre le fichier moncompteur.txt
    $fichier = fopen("moncompteur.txt","r+");

    // on lit la première ligne du fichier, le résultat est stocké dans la variable $visiteurs
    $visiteurs = fgets($fichier);

    // on ajoute 1 au nombre de visiteurs
    $visiteurs++;

    // on se positionne au début du fichier
    fseek($fichier,0);

    // on écrit le nouveau nombre dans le fichier
    fputs($fichier,$visiteurs);

    // on referme le fichier moncompteur.txt
    fclose($fichier);

    // on indique sur la page le nombre de visiteurs
    echo "$visiteurs personnes sont passées par ici";


    // conpteur
    $visiteurs = file_get_contents("moncompteur.txt");

    $visiteurs++;
    
    file_put_contents("moncompteur.txt", $visiteurs);
    
    print("$visiteurs personnes sont passées par ici");
















?>