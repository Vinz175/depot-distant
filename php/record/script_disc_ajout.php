<?php
/*    // Récupération du title :
    if (isset($_POST['title']) && $_POST['title'] != "") {
        $title = $_POST['title'];
    }
    else {
        $title = Null;
    }

    // Récupération de l'artiste :
    if (isset($_POST['artist']) && $_POST['artist'] != "") {
        $artist = $_POST['artist'];
        }
    else {
        $year = Null;
        }
        // Récupération de l'année :
    if (isset($_POST['year']) && $_POST['year'] != "") {
        $year = $_POST['year'];
    }
    else {
        $year = Null;
    }

    // Récupération du genre :
    if (isset($_POST['genre']) && $_POST['genre'] != "") {
        $genre = $_POST['genre'];
        }
    else {
        $genre = Null;
        }

    // Récupération du label :
    if (isset($_POST['label']) && $_POST['label'] != "") {
        $label = $_POST['label'];
        }
    else {
        $label = Null;
        }
    
    // Récupération du prix :
    if (isset($_POST['price']) && $_POST['price'] != "") {
        $price = $_POST['price'];
        }
    else {
        $price = Null;
        }

$picture = "";
    // Récupération de l'image :
    if (isset($_POST['picture']) && $_POST['picture'] != "") {
        $picture = $_POST['picture'];
        var_dump($_POST['picture']);
        die;
        }
    else {
        $picture = Null;
        }
 
*/
// récupération de toutes les données
foreach ($_POST as $key => $value)
      $$key = $value;





    // dl de l'image
// On met les types autorisés dans un tableau (ici pour une image)
$aMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");

// On extrait le type du fichier via l'extension FILE_INFO 
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimetype = finfo_file($finfo, $_FILES["picture"]["tmp_name"]);
finfo_close($finfo);

if (in_array($mimetype, $aMimeTypes))
{
    // Le type est parmi ceux autorisés, donc OK, on va pouvoir 
    // déplacer et renommer le fichier 
    $picture = $_POST['title'].".jpg";
    move_uploaded_file($_FILES["picture"]["tmp_name"], "jaquettes/".$picture);   

} 
else 
{
   // Le type n'est pas autorisé, donc ERREUR

   echo "Type de fichier non autorisé";    
   exit;
}   
    // déplacer et renommer le fichier
// move_uploaded_file($_FILES["picture"]["tmp_name"], "jaquettes/".$disc->disc_title.".jpg");    

    // En cas d'erreur, on renvoie vers le formulaire
    // if ($title == Null || $year == Null || $genre == Null || $label == Null || $price == Null || $picture == Null) header("Location: disc_new.php");

    // S'il n'y a pas eu de redirection vers le formulaire (= si la vérification des données est ok) :
    require "db.php"; 
    $db = connexionBase();


try {
    // Construction de la requête INSERT sans injection SQL :
    $requete = $db->prepare("INSERT INTO disc (disc_title, disc_year, disc_picture, disc_genre, disc_label, disc_price, artist_id) VALUES (:title, :year, :picture, :genre, :label, :price, :artist);");

    // Association des valeurs aux paramètres via bindValue() :
    $requete->bindValue(":title", $title, PDO::PARAM_STR);
    $requete->bindValue(":year", $year, PDO::PARAM_INT);
    $requete->bindValue(":picture", $picture, PDO::PARAM_STR);

    $requete->bindValue(":genre", $genre, PDO::PARAM_STR);
    $requete->bindValue(":label", $label, PDO::PARAM_STR);
    $requete->bindValue(":price", $price, PDO::PARAM_STR);
    $requete->bindValue(":artist", $artist, PDO::PARAM_INT);


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
    die("Fin du script (script_disc_ajout.php)");
}

// Si OK: redirection vers la page artists.php
header("Location: discs.php");

// Fermeture du script
exit;
?>