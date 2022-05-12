<?php
    // ...
    // Script a executer
    // ...
?>


// Les variables
<?php
$a = 12 ;           // $a est un entier
$b = "Bonjour";     // $b est une chaine de caracteres

$c;                 // renverra une erreur de traitement de lecture
?>

// Objets
<?php
// Exemple avec un objet issu de la classe `DateTime`
$madate = new DateTime();

echo $madate->forat('d-m-Y');
// affichera la date du jour au format '01/01/2022'
?>

// Forcer le type d'une variables
<?php
$a = 15.125863;
settype($a, "integer");
echo $a;
?>

<?php
$a = 6.32172;
$b = intval($a); // convertion en entier
$c = doubleval($a); // convertir en decimal
echo $a - $b - $c;
?>

