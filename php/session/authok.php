<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    inscription réussie

    <?php
        echo 'Bonjour ' .$_SESSION['prenom']. ',
        ton mot de passe ' .$_SESSION['password'] ;
    ?>

</body>
</html>