<?php
// passer le premier caractere en majuscules
/*
$texte = ucfirst("bonjour le monde");
echo "$texte";
*/

/*
function bonjour($prenom)
{
    echo "Bonjour ".$prenom;
}
bonjour("vinc");
*/

/*
$a = $b = 2;
function somme() {
    global $a, $b;
   $c = $a + $b; 
   echo "la somme de $a + $b = $c <br>"; 
} 
somme(); 
echo $b."<br>"; 
*/

// stockage de variable static
function Test() { 
    static $a=0; 
    echo $a."<br>"; 
    $a++; 
 } 
// Appel de la fonction (2 fois)
 Test(); 
 Test();
// la variable reste stockée et affiche 0 puis 1,2
?>