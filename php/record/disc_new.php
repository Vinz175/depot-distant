<?php

    // on importe le contenu du fichier "db.php"
    include "db.php";
    // on exécute la méthode de connexion à notre BDD
    $db = connexionBase();

    // on lance une requête pour chercher toutes les fiches disc et artistes
    $requete = $db->query("SELECT * FROM artist");
    // on récupère tous les résultats trouvés dans une variable
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    // on clôt la requête en BDD
    $requete->closeCursor();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout vinyle</title>

<!-- code feuille de style css bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>


<form class="form-block m-2" action="script_disc_ajout.php" method="POST" id="ajout_disc" enctype="multipart/form-data">
        <fieldset>
            <legend>Ajouter un vinyle</legend>
                <label for="titre">Title : </label>
                    <input class="form-control mr-sm-2" placeholder="Enter title" type="text" name="title" id="title">
                <label for="artist">Artist : </label>
                    <select class="form-control mr-sm-2" name="artist" id="artist">
                    <?php foreach ($tableau as $artist): ?>
                            <option value="<?=$artist->artist_id ;?>"><?=$artist->artist_name; ?></option>
                    <?php endforeach; ?>                        
                    </select>
                <label for="year">Year : </label>
                    <input class="form-control mr-sm-2" type="text" name="year" id="year">
                <label for="genre">Genre : </label>
                    <input class="form-control mr-sm-2" type="text" name="genre" id="genre">
                <label for="label">Label : </label>
                    <input class="form-control mr-sm-2" type="text" name="label" id="label">
                <label for="price">Price : </label>
                    <input class="form-control mr-sm-2" type="text" name="price" id="price">   
<!-- Bouton choisir un fichier-->
                    <label for="picture">Picture</label>
                    <input type="file" name="picture" id="picture">
                           <br>
                           <br>                  
<!-- boutons ajouter / retour -->
                    <input class="btn btn-primary" type="submit"  value="Ajouter">
                    <input class="btn btn-primary" type="reset" value="Retour" id="annuler">
        </fieldset>
</form>




<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>