<?php
// On récupére la session
session_start();

    // On se connecte à la BDD via notre fichier db.php :
    require "db.php";
    $db = connexionBase();

    // On récupère l'ID passé en paramètre :
    $id = $_GET["id"];
    // var_dump($id);
    // On crée une requête préparée avec condition de recherche :
    $requete = $db->prepare("SELECT * FROM disc join artist on disc.artist_id = artist.artist_id WHERE disc_id=?");
    // on ajoute l'ID du disque passé dans l'URL en paramètre et on exécute :
    $requete->execute(array($id));

    // on récupère le 1e (et seul) résultat :
    $tableau = $requete->fetch(PDO::FETCH_OBJ);

    // on clôt la requête en BDD
    $requete->closeCursor();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- code feuille de style css bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<!-- <img class="" src="jaquettes/Dirt.jpeg">  -->


<form class="form-block m-2" action="" method="GET" id="ajout_disc">
    <fieldset class="container">
        <legend>Détails</legend>
            <div class="row justify-content-around">
                <label class="col-5" for="titre">Title : </label>
                <label class="col-5" for="titre">Artist : </label>
            </div> <!-- fin div class="row" -->
            <div class="row justify-content-around">
                    <input class="form-control col-5" value="<?=$tableau->disc_title; ?>" type="text" name="titre" id="titre" readonly>
                    <input class="form-control col-5" value="<?=$tableau->artist_name; ?>" type="text" name="artist" id="artist" readonly>
            </div> <!-- fin div class="row" -->
            <div class="row justify-content-around">
                <label class="col-5" for="titre">Year : </label>
                <label class="col-5" for="titre">Genre : </label>
            </div> <!-- fin div class="row" -->
            <div class="row justify-content-around">
                    <input class="form-control col-5" value="<?=$tableau->disc_year; ?>" type="text" name="year" id="year" readonly>
                    <input class="form-control col-5" value="<?=$tableau->disc_genre; ?>" type="text" name="genre" id="genre" readonly>
            </div> <!-- fin div class="row" -->
            <div class="row justify-content-around">
                <label class="col-5" for="titre">Label : </label>
                <label class="col-5" for="titre">Price : </label>
            </div> <!-- fin div class="row" -->
            <div class="row justify-content-around">
                    <input class="form-control col-5" value="<?=$tableau->disc_label; ?>" type="text" name="label" id="label" readonly>
                    <input class="form-control col-5" value="<?=$tableau->disc_price; ?>" type="text" name="price" id="price" readonly>
            </div> <!-- fin div class="row" -->
            <br>
            <p>Picture</p>
            <img class="row col-6" src="jaquettes/<?= $tableau->disc_picture; ?>" alt="...">
                <br>
<!-- ajout gestion de session -->
    <?php if (isset($_SESSION["prenom"])) { ?>
                <a href="disc_form.php?id=<?=$id?>" class="btn btn-primary">Modifier</a>
            <a href="script_disc_delete.php?id=<?= $tableau->disc_id ?>" class="btn btn-primary mr-1" onclick="return confirm ('Etes vous sur de vouloir supprimer ce disque ?')">Supprimer
    <?php } ?>
<!-- fin ajout gestion de session -->
            <a href="discs.php" class="btn btn-primary" type="reset" value="retour">Retour</a>


</fieldset>


 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
</body>
</html>