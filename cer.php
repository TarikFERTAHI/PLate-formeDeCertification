<center>
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

div {
  /*background-color: rgb(240, 240, 240);*/
  background-color:  lightblue;
  
}

.signature, .title {
    
   /* border-color: lightblue;*/
float:left;
  border-top: 20px solid #000;
  width: 600px; 
  text-align: center;
}
h5 {
 /*text-align: left;*/
  margin-top: 10px;
  margin-left:1150px;
  
}
h6 {
  text-align: center;
  margin-top:110px;
  margin-right:140px;margin-right:140px;
}

</style>
</head>
<body>
<h5><u><a href="http://127.0.0.1/QCM/deconnexion.php" class="text-info">Déconnexion</a></u></h5>
<?php
include_once "init.php";
session_start();
if (!isset($_SESSION['idM']))
    header("Location: connexion.php");   
$p=$_SESSION['pseudo']; 
include_once "init.php";

$_nv=$_SESSION['idnv'];

$matiere=$_SESSION["idmt"];


//$mat= $_POST["idmat"] ;
?> 

<div style="width:950px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
<div style="width:890px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
       <span style="margin-top:250px;font-size:50px; font-weight:bold">Certification de TC-SRI</span>
       <br><br>
       <span style="font-size:25px"><?php echo "Ce certificat est fiérment présenté à:<h2>$p</h2>" ?></span>
       <br><br>
       <span style="font-size:25px"><i>Félicitations! Vous avez passé ce niveau avec succès</i></span>
   
       
       <span style="font-size:25px"><i>a rempli avec succès les conditions requises pour être reconnu en tant que spécialiste pour la matière <?php if ($matiere == 4){
     echo "Réseau Informatique" ;
    }
    elseif($matiere== 5){
        echo "Système D'exploitation Propriétaire";
    }
    else{
        echo "Linux";
    } 
     ?> niveau <?php echo $_nv ?> </i></span> <br/><br/>
  
<table style="margin-top:80px;float:left">
<tr>
<td><span><b>Certifié Par:</b></td>
</tr>
<tr>
<td style="width:200px;float:left;border:0;border-bottom:1px solid #000;"></td>
</tr>
<tr>
<td style="text-align:center"><span><b>FERTAHI Tarik</b></td>
</tr>
<tr>
<td style="text-align:center"><span><b>MABROUKI Yassine</b></td>
</tr>
</table>
<h6>   <button class="btn btn-info" id="imprimer">Imprimer</button></h6>
         

  <!--<h5><u><a href="http://127.0.0.1/QCM/choixniveau.php" class="text-info">passer l'autre niveau</a></u></h5>
-->
</div>
</div>

<script src="jquery.js"></script>
<script src="script.js"></script>
</body>
</html>
</center>
 
 
