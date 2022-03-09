<?php
session_start();
include_once "init.php";
if (!isset($_SESSION['idM']))
{
   if(isset($_POST['formconnexion'])) {
      $mailconnect = htmlspecialchars($_POST['mailconnect']);
      $mdpconnect = $_POST['mdpconnect'];
      if(!empty($mailconnect) AND !empty($mdpconnect)) {
         $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
         $requser->execute(array($mailconnect, $mdpconnect));
         $userexist = $requser->rowCount();
         if($userexist == 1) {
            $userinfo = $requser->fetch();
            $_SESSION['idM'] = $userinfo['idM'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['mail'] = $userinfo['mail'];
            header("Location: choixniveau.php");
         } else {
            $erreur = "votre Mail ou mot de passe est incorrect. Veuillez réessayer !";
         }
      } else {
         $erreur = "Tous les champs doivent être complétés !";
      }
   }
}
else
{
   header("Location: choixniveau.php");
}
/*http://127.0.0.1:8080/QCM/connexion.php*/
?>
<html>
   <head>
      <title>Page de connexion</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery/jquery.js"></script>
  <script src="bootstrap/jquery/popper.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
   
  <style>
   body {
      background-image: url("gradient_bg.png");
      background-repeat: no-repeat;
      background-size: 1380px, 1300px, auto;
}

</style>
   </head>
   <body>
   <div class="container text-dark">
      <div align="center">
         <h2>Connexion</h2>
         <br /><br />
         <form method="POST" action="">
            <input type="email" name="mailconnect" placeholder="e-mail" />
            <input type="password" name="mdpconnect" placeholder="Mot de passe" />
            <br /><br />
            <input type="submit" name="formconnexion" class="btn btn-info" value="connecter" />
         
         </form>
		
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
      </div>
      <h4><u><a href="http://127.0.0.1/QCM/accueil.php">Revenir à l’accueil</a></u></h4>
   </body>
</html>