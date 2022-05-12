<?php
session_start();
require "function.php";
$tableau = discdetail2();
?>


<!-- ... après le bloc PHP : -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Liste des disques</title>

<!-- code feuille de style css bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<div class="container">
  <div class="row ml-2 mr-2 justify-content-between"> <!-- début div justify content between -->
    <h2>Liste des disques(<?php echo count($tableau); ?>)</h2>

    <div class="bton mt-1">
      <a class="btn btn-primary" href="index.php" role="button">Retour</a>


<!-- ajout gestion de session -->
    <?php if (isset($_SESSION["prenom"])) { ?>

        <a class="btn btn-primary" href="disc_new.php" role="button">Ajouter</a>
        <a class="btn btn-primary" href="../session/script_disconnect.php" role="button">Deconnection </a>
    </div> <!-- fin div class bton -->

      <?php } ?>
<!-- fin ajout gestion de session -->
  </div> <!-- fin div class row justify content between-->

<!-- création des cartes -->

<?php $col = 1;
foreach ($tableau as $disc){
  if ($col == 1)
  echo '<div class="row mb-2">';

displayDisc($disc);
  
if ($col == 2) {
echo '</div>';
$col = 1;
}
else $col++;
}
?>

<!-- <div class="card ml-3" style="max-width: 540px;"> -->
  <!-- <div class="row g-0"> -->



</div> <!-- fin div class="container" -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>

