<?php

    var_dump($_POST);

    // Récupération des valeurs :
    $id = (isset($_POST['id']) && $_POST['id'] != "") ? $_POST['id'] : Null;

    $title = (isset($_POST['titre']) && $_POST['titre'] != "") ? $_POST['titre'] : Null;

    // if (isset($_POST['titre'])) {
    //     if ($_POST['titre)'] != "") {
    //         $title = $_POST['titre)'];
    //     }
    //     else {
    //         $title = Null;
    //     }
    // }
    // else {
    //     $title = Null;
    // }

    $year = (isset($_POST['year']) && $_POST['year'] != "") ? $_POST['year'] : Null;
    $genre = (isset($_POST['genre']) && $_POST['genre'] != "") ? $_POST['genre'] : Null;
    $label = (isset($_POST['label']) && $_POST['label'] != "") ? $_POST['label'] : Null;
    $price = (isset($_POST['price']) && $_POST['price'] != "") ? $_POST['price'] : Null;

    // var_dump($title);
    // die;

    // En cas d'erreur, on renvoie vers le formulaire
    if ($id == Null) {
        header("Location: discs.php");
    }
    elseif ($title == Null || $year == Null || $genre == Null || $label == Null || $price == Null) {
        header("Location: disc_form.php?id=".$id."&error=1");
        exit;
    }

    // Si la vérification des données est ok :
    require "db.php"; 
    $db = connexionBase();

    try {
        // Construction de la requête UPDATE sans injection SQL :
        $requete = $db->prepare("UPDATE disc SET disc_title = :title, disc_year = :year, disc_genre = :genre, disc_label = :label, disc_price = :price WHERE disc_id = :id;");
        $requete->bindValue(":id", $id, PDO::PARAM_INT);
        $requete->bindValue(":title", $title, PDO::PARAM_STR);
        $requete->bindValue(":year", $year, PDO::PARAM_INT);
        $requete->bindValue(":genre", $genre, PDO::PARAM_STR);
        $requete->bindValue(":label", $label, PDO::PARAM_STR);
        $requete->bindValue(":price", $price, PDO::PARAM_INT);

        $requete->execute();
        $requete->closeCursor();

    }

    catch (Exception $e) {
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (script_disc_modif.php)");
    }
    
//////////////////////////////// IMAGE


//////////////////////// FIN IMAGE

    // Si OK: redirection vers la page disc_detail.php
    header("Location: disc_detail.php?id=" . $id);
    exit;
    ?>