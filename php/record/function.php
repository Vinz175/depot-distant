<?php

function ConnexionBase() {

    try 
    {
        $connexion = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', '3112');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion;

    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
        die("Fin du script");
    }
}

function listeArtistes(){
    $db = connexionBase();
/*
    // on lance une requête pour chercher toutes les fiches disc et artistes
    $requete = $db->query("SELECT * FROM disc");

    $tableau2 = $requete->fetchAll(PDO::FETCH_OBJ);

    $requete->closeCursor();
    */
        // On récupère l'ID passé en paramètre :
        // $id = $_GET["id"];

        // On crée une requête préparée avec condition de recherche :
        $requete = $db->prepare("SELECT * FROM artist");
        // on ajoute l'ID du disque passé dans l'URL en paramètre et on exécute :
        $requete->execute();
    
        // on récupère le 1e (et seul) résultat :
        $tableau2    = $requete->fetchAll(PDO::FETCH_OBJ);
    
        // on clôt la requête en BDD
        $requete->closeCursor();
    return $tableau2;
}

function discdetail2(){
    $db = connexionBase();

    // on lance une requête pour chercher toutes les fiches disc et artistes
    $requete = $db->query("SELECT * FROM disc join artist on disc.artist_id = artist.artist_id");


    // on récupère tous les résultats trouvés dans une variable
    // $tab = $requete->fetch(PDO::FETCH_OBJ);
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    // var_dump($tab);
    // var_dump($tableau);
    // on clôt la requête en BDD
    $requete->closeCursor();
    return $tableau;
}

    function discdetail($id){
        $db = connexionBase();

        // on lance une requête pour chercher toutes les fiches disc et artistes
        $requete = $db->prepare("SELECT * FROM disc join artist on disc.artist_id = artist.artist_id WHERE disc_id=?");
            // on ajoute l'ID du disque passé dans l'URL en paramètre et on exécute :
            $requete->execute(array($id));
        // on récupère tous les résultats trouvés dans une variable
        // $tab = $requete->fetch(PDO::FETCH_OBJ);
        $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
        // var_dump($tab);
        // var_dump($tableau);
        // on clôt la requête en BDD
        $requete->closeCursor();

        return $tableau;
    }

    function displayDisc($disc){

    echo '<div class="col-2 p-0">';
    echo '  <img class="img-fluid img-thumbnail"';
    echo '    <img src="jaquettes/'. $disc->disc_picture.'" class="img-fluid rounded-start"';
    echo '  alt="'.$disc->disc_picture.'"';
    echo '  title="'.$disc->disc_picture.'">';
    echo '</div>';
    echo '<div class="col-3 d-flex flex-column"> ';
    echo '  <div class="small">';
    echo '  <h5>'.$disc->disc_title.'<br></h5>';
    echo '  <b>'.$disc->artist_name.'</b><br>';
    echo '  <b>Label : </b>'.$disc->disc_label.'<br>';
    echo '  <b>Year : </b>'.$disc->disc_year.'<br>';
    echo '  <b>Genre : </b>'.$disc->disc_genre.'<br>';
    echo '</div>';
    echo '<div class="mt-auto mb-2">';
    echo '  <a href="disc_detail.php?id='.$disc->disc_id.'"><button class="btn btn-primary btn-sm">Details</button></a>';
    echo '</div>';
    echo '</div>';

    }

    function fetchId($id) {
        $db = connexionBase();
        $id = $_GET["id"];
        $requete = $db->prepare("SELECT * FROM disc join artist on disc.artist_id = artist.artist_id WHERE disc_id=?");
        $requete->execute(array($id));
        $tableau = $requete->fetch(PDO::FETCH_OBJ);
        $requete->closeCursor();
        return $tableau;
        }