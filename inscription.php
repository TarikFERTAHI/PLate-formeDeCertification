<?php
   include_once "init.php";


if(isset($_POST['forminscription'])) 
{
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp =($_POST['mdp']);
   $mdp2 =($_POST['mdp2']);
   
   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) 
   {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) 
	  {
         if($mail == $mail2) 
		 {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) 
			{
               $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) 
			   {
                  if($mdp == $mdp2) 
				  {
                     $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
                     $insertmbr->execute(array($pseudo, $mail, $mdp));
                     $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                  } 
				  else 
				  {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } 
			   else 
			   {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } 
			else 
			{
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } 
		 else 
		 {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      } 
	  else 
	  {
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      }
   } 
   else 
   {
      $erreur = "Tous les champs doivent être complétés !";
   }
   
   
}
?>



<html>
   <head>
      <title>Page D'inscription</title>
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
   <div class="container-fluid text-dark">
      <div align="center">
         <h1>Inscription</h1>
         <br /><br />
         <form method="POST" action="">
            <table>
               <tr>
                  <td>
                  <h4> <label for="pseudo">Nom et Prénom :</label></h4>
                  </td>
                  <td>
                  <h4> <input type="text" placeholder="Votre Nom" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" /><h4>
                  </td>
               </tr>
               <tr>
                  <td>
                  <h4> <label for="mail">E-mail :</label></h4>
                  </td>
                  <td>
                  <h4>  <input type="email" placeholder="Votre e-mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" /></h4>
                  </td>
               </tr>
               <tr>
                  <td>
                  <h4><label for="mail2">Confirmation du E-mail :</label></h4>
                  </td>
                  <td>
                  <h4> <input type="email" placeholder="Confirmez votre e-mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" /></h4>
                  </td>
               </tr>
               <tr>
                  <td>
                  <h4> <label for="mdp">Mot de passe :</label></h4>
                  </td>
                  <td>
                  <h4> <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" /></h4>
                  </td>
               </tr>
               <tr>
                  <td>
                  <h4> <label for="mdp2">Confirmation du mot de passe :</label></h4>
                  </td>
                  <td>
                  <h4>  <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" /></h4>
                  </td>
               </tr>
               
               <tr>
                  <td></td>
                  <td align="center">
                     <br />

                     <h3><input type="submit" name="forminscription" class="btn btn-info" value="S'inscrire"></h3>

                  


                  </td>
               </tr>
            </table>
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