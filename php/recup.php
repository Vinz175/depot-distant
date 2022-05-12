<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Document</title>

<!-- code feuille de style css bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<?php
// utilisation de la fonction file() pour lire le fichier customers.csv dans un tableau et ligne par ligne
$lines = file("http://bienvu.net/misc/customers.csv", FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES );

foreach ($lines as $line) 
    { 
        //print_r (explode(",", $line)); // affiche la donnée de la variable
        //echo "<br>";
        list ($Surname, $Firstname, $Email, $Phone, $City, $State)=explode(",", $line);
    } 

?>

<div class="container">
      <h1>Nouveaux utilisateurs</h1>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Surname</th>
            <th>Firstname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>City</th>
            <th>State</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td> <?= $Surname; ?></td>
            <td> <?php echo $Firstname; ?></td>
            <td> <?php echo $Email; ?></td>
            <td> <?php echo $Phone; ?></td>
            <td> <?php echo $City; ?></td>
            <td> <?php echo $State; ?></td>
          </tr>

        </tbody>
      </table>
      
    </div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

      
</body>
</html>