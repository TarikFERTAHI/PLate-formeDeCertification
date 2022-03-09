<!DOCTYPE html>
<html>
<head>
<title>certificate</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery/jquery.js"></script>
  <script src="bootstrap/jquery/popper.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php

include_once "init.php";		
session_start();
		if (!isset($_SESSION["idM"]))
		{
			header("Location: connexion.php");
			exit();
		}
include_once "init.php";
$id_membre=$_SESSION["idM"];
$id_nv=$_SESSION['idnv'];
/*$rep = $bdd->prepare("SELECT * FROM resultas WHERE idmembre = ? AND idn = ?   ") ;
$rep->execute(array($id_membre,$id_nv));
$resultat = $rep->fetch();
var_dump( $resultat ) ;*/
//echo $id_nv."<br>";
//echo $id_membre."<br>";
$rep = $bdd->query("SELECT * FROM resultas WHERE idmembre = $id_membre AND idn = $id_nv ") ;
	$rep->execute();

$resultat = $rep->fetch();
//echo $resultat['res'].";".$resultat['nb_question'].";".$resultat['idmembre'].";".$resultat['idn'];
//echo $resultat['res'].";".$resultat['nb_question'].";".$resultat['idmembre'].";".$resultat['idn'];


			
      $d=($resultat["res"]/$resultat["nb_question"]);

  
			if ( $d > 0.7){ 
			
		
			//echo "tres bien";
			header("location: cer.php");
			}
			
			else{ 
			

		
			//echo "mauvaise";
			header("location: alert2.php");
			
			}
			
			
		

?>




</body>
</html>