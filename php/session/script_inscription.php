<?php
    // Récupération du Nom :
    if (isset($_POST['nom']) && $_POST['nom'] != "") {
        $nom = $_POST['nom'];
    }
    else {
        $nom = Null;
    }

    // Récupération des infos (même traitement, avec une syntaxe abrégée)
    $prenom = (isset($_POST['prenom']) && $_POST['prenom'] != "") ? $_POST['prenom'] : Null;
    $email = (isset($_POST['email']) && $_POST['email'] != "") ? $_POST['email'] : Null;
    $password = (isset($_POST['mdp']) && $_POST['mdp'] != "") ? $_POST['mdp'] : Null;
    // hash du password
    $pwd_hashed = password_hash($password, PASSWORD_ARGON2ID);

    // En cas d'erreur, on renvoie vers le formulaire
    if ($nom == Null || $prenom == Null || $email == Null || $password == Null) header("Location: inscription_form.php?nom=".$nom."&error=1");

    // S'il n'y a pas eu de redirection vers le formulaire (= si la vérification des données est ok) :
    require "db.php"; 
    $db = connexionBase();


try {
    // Construction de la requête INSERT sans injection SQL :
    $requete = $db->prepare("INSERT INTO users (nom, prenom, email, password) VALUES (:nom, :prenom, :email, :mdp);");

    // Association des valeurs aux paramètres via bindValue() :
    $requete->bindValue(":nom", $nom, PDO::PARAM_STR);
    $requete->bindValue(":prenom", $prenom, PDO::PARAM_STR);
    $requete->bindValue(":email", $email, PDO::PARAM_STR);
    $requete->bindValue(":mdp", $pwd_hashed, PDO::PARAM_STR);

    // Lancement de la requête :
    $requete->execute();

    // Libération de la requête (utile pour lancer d'autres requêtes par la suite) :
    $requete->closeCursor();
}

// Gestion des erreurs
catch (Exception $e) {
    var_dump($requete->queryString);
    var_dump($requete->errorInfo());
    echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
    die("Fin du script (script_inscription.php)");
}

// Si OK: redirection vers la page artists.php
session_start();
$_SESSION["prenom"] = $user->prenom;
header("Location: ../record/discs.php");

// Fermeture du script
exit;
?>