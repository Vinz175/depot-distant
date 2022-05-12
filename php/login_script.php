<?php

// utiliser des algorithmes de cryptage en PHP
$password_hash = password_hash("admin", PASSWORD_DEFAULT);
echo $password_hash; 

// vérifier si un mot de passe saisi est bien celui enregistré en base
password_verify($chaine_saisie_en_clair, $hash_stocke_en_bdd);
?>