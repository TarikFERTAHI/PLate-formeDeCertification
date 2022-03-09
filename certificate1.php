<!DOCTYPE html>
<html lang="en">
<head>
  <title>certificate</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery/jquery.js"></script>
  <script src="bootstrap/jquery/popper.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
  form.cer {
    
  background-color: rgb(240, 240, 240);
    
  margin-top: 20px;
  width: 1100px;
  padding: 40px;
  border: 5px solid;
  border-color: lightblue;
  text-transform: capitalize;
  letter-spacing: 2px;
  word-spacing: 5px;
  /*border-style: dashed  ;*/
  margin-left: 150px;
}
h3 {
  text-align: center;
  text-shadow: 3px 2px lightblue;
  /*margin-left: 150px;*/
}

</style>
</head>
<body>
  
<div class=" container-fluid bg-white  text-dark">
<?php
include_once "init.php";
session_start();
if (!isset($_SESSION['idM']))
    header("Location: connexion.php");   
$p=$_SESSION['pseudo'];



?> 


<form class=cer >
<h3>Bonjour <?php echo $p ?></h3>
  <p>Félicitations ! Vous êtes arrivé au terme du module de formation intitulé CCNA Routing and 
Switching : Introduction to Networks proposé dans le cadre de votre cursus à la 
Cisco Networking.
<p>Aujourd’hui, connaître les nouvelles technologies n’a jamais été aussi important et 
Cisco est fier de vous offrir les connaissances et les compétences nécessaires à la 
conception et à l’entretien de réseaux.</9>
<p>Je vous adresse et vous prie d’accepter mes vœux de réussite les plus sincères. </p>
<p><u>Certifier par :</u></p>
<p>FERTAHI Tarik</p>
<p>MABROUKI Yassine</p>

         <h6>   <button class="btn btn-info" id="imprimer">Imprimer</button></h6>
         <h5><u><a href="http://127.0.0.1/QCM/choixniveau.php" class="text-info">Clique ici pour passer l'autre niveau</a></u></h5>
</form>
</div>


<script src="jquery.js"></script>
<script src="script.js"></script>
</body>

</html>


