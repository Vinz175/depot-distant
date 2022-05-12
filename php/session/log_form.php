<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
        <!-- code feuille de style css bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="text-center">
<!-- Background image -->
    <img class="background mt-2" src="../record/jaquettes/bg.png" title="logo" alt="logo" width="50%" height="auto">

<!-- Background image -->

        <form action ="script_authentification.php" method="POST">
            <br>
            <h4 class="text-center ml-5">Login</h4>
                <br>
                <div class="row">
                    <div class=col-1>
                    </div>
                        <label class="ml-5" for="email">Email : </label><br>
                           <input class="form-control col-3 ml-2" type="text" name="email" id="email">
                        <label class="ml-5" for="mdp">Mot de passe : </label><br>
                          <input class="form-control col-2 ml-2" type="text" name="mdp" id="mdp">

                        <button class="btn btn-primary ml-2" type="submit" value="Connection">Connection</button>
                </div> <!-- fin div class row -->
    </div> <!-- fin div class text center -->

<!-- gestion message d'erreur -->
<?php if (isset($_GET["error"]) && $_GET["error"] == 2) { ?>
<div class="row">   <!-- div class row -->
    <div class="alert alert-danger col-3 ml-5" role="alert">
Email non valide
    </div>
<?php } ?>

<?php if (isset($_GET["error"]) && $_GET["error"] == 3) { ?>
    <div class="alert alert-danger col-3 ml-5" role="alert">
Mot de passe non valide
    </div>
</div> <!-- fin div class row -->
<?php } ?>
<!-- fin gestion message d'erreur -->

</div> <!-- fin div class container -->
</form>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>