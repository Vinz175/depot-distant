<?php
// On charge l'enregistrement correspondant à l'ID passé en paramètre :
require "function.php";
$disc = fetchId($_GET['id']);
$artists = listeArtistes();
// var_dump($disc);
// var_dump($artists);

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
 <!-- gestion message d'erreur -->
<?php if (isset($_GET["error"]) && $_GET["error"] == 1) { ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Aïe aïe aïe !</strong> Formulaire à corriger
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
    </div>
<?php } ?>
<!-- fin message d'erreur -->

<form class="form-block m-2" action="script_disc_modif.php" method="post" id="modif_disc">
    <fieldset class="container">
        <legend>Détails</legend>
        <input class="form-control" value="<?=$disc->disc_id; ?>" type="text" name="id" id="id" hidden>

                <label for="titre">Title : </label>
                    <input class="form-control" value="<?=$disc->disc_title; ?>" type="text" name="titre" id="titre">
                <label for="titre">Artist : </label>
                    <select class="form-control" name="artist" id="artist">
                        <?php foreach ($artists as $artist): ?>
                            <!-- <option <?php if ($artist->artist_id == $disc->artist_id) { echo "selected";} ?> value="<?=$artist->artist_id ;?>"><?=$artist->artist_name; ?></option> -->
                            <option <?= ($artist->artist_id == $disc->artist_id) ? "selected" : "" ?> value="<?=$artist->artist_id ;?>"><?=$artist->artist_name; ?></option>
                        <?php endforeach; ?>                        
                    </select>
                <label for="titre">Year : </label>
                    <input class="form-control" value="<?=$disc->disc_year; ?>" type="text" name="year" id="year">
                <label for="titre">Genre : </label>
                    <input class="form-control" value="<?=$disc->disc_genre; ?>" type="text" name="genre" id="genre">
                <label for="titre">Label : </label>
                    <input class="form-control" value="<?=$disc->disc_label; ?>" type="text" name="label" id="label">
                <label for="titre">Price : </label>
                    <input class="form-control" value="<?=$disc->disc_price; ?>" type="text" name="price" id="price">

            <!-- Bouton choisir un fichier-->
            <label for="fichier">Picture</label>
            <br>
                <input type="file" name="picture" id="picture" accept="image/png, image/jpeg">
            <img class="row col-6" src="jaquettes/<?= $disc->disc_picture ?>" alt="...">
                    <br>
            <input class="btn btn-primary col-2" type="submit"  value="Modifier">
            <a href="discs.php" class="btn btn-primary col-2" type="submit">Retour</a>


</fieldset>

 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>