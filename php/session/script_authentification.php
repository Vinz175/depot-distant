<?php

session_start();
session_destroy();

// var_dump($_POST);


include("db.php");
$db = connexionBase();

if (! empty($_POST["email"])) {

   $username = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
   $password = filter_var($_POST["mdp"], FILTER_SANITIZE_STRING);

   $log = $db->prepare("SELECT * FROM users WHERE email = :mail");
   $log->bindValue(":mail", $username, PDO::PARAM_STR);
   $log->execute();

   
   $user = $log->fetch(PDO::FETCH_OBJ);
   $log->closeCursor();

   if (!$user) { 
         // erreur mauvais mail
         header("Location: inscription_form.php?mail=".$user."&error=2");
         exit;
 

         // header("location: inscription_form.php");
   }
   else {

      if (!password_verify($password, $user->password)) {
            // erreur mauvais mot de passe
            header("Location: inscription_form.php?mail=".$password."&error=3");
            exit;
      }
      else {
         session_start();
         $_SESSION["prenom"] = $user->prenom;
         header("Location: ../record/discs.php"); //authok.php");
         exit;
      }
   }
   // var_dump($user);


   die;









   // require_once (__DIR__ . "./class/Member.php");
   
   // $member = new Member();
   // $isLoggedIn = $member->processLogin($username, $password);
   // if (! $isLoggedIn) {
   //     $_SESSION["errorMessage"] = "Invalid Credentials";
   // }

   header("Location: index.php");
   exit();
}
?>