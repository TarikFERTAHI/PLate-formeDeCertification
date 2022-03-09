<html>
   <head>
      <title>Page test</title>
	  
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery/jquery.js"></script>
  <script src="bootstrap/jquery/popper.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
	  <style> 
	body {
  background-image: url("bggg.png");
  background-repeat: no-repeat;
  background-size: 1380px, 1300px, auto;
}

	  form{
		background-image: url("bggg.png");
  background-repeat: no-repeat;
  background-size: 1380px, 1300px, auto;
  top: 80px;
		/*background-color: white; 
		top: 80px;
		position: relative;*/
	  }
	  .question{
		
		  top: 80px;
	  }
	  h3
	  {
		color:black;
		 
	  }
	  .container{
		
		top: 20px;
	  }
	  h5{
  position: absolute;
  top: 150px;
  left: 850px;
}
 
	  </style>
   </head>
   <body>
   <div class="container">
   
  <div align="center">
   
   </div>
   		<form action="resultas.php" method="post">
		<?php
		session_start();
		if (!isset($_SESSION["idM"]))
		{
			header("Location: connexion.php");
			exit();
		}
		include_once "init.php";
		$idmt=$_POST["idmt"];
		$idnv=$_POST["idnv"];
		$_nv["idnv"]=$_SESSION["idnv"]=$idnv;
		$matiere=$_SESSION["idmt"]=$idmt;
		
		
		if ($idnv > 1)
		{
			$con = $bdd->prepare("SELECT * FROM resultas WHERE idmembre = ? AND idn = ? ORDER BY res DESC LIMIT 0,1");
			$con->execute(array($_SESSION["idM"], $idnv - 1));
			$data = $con->fetch();
			
	
			if (count($data) == 0)
			{
		
				header("Location: choixniveau.php");
				exit();
			}
			
			if (($data["res"] / $data["nb_question"]) < 0.7)
			{

		
				header("Location: alert.php");

				exit();
				
			}
			
		}
		$data = $bdd->prepare("select * from questions where idmat = ? AND idn = ?");
		$data->execute(array($idmt, $idnv));
		$rows = $data->fetchAll();
		$nb_question = 5;
		$i = 1;
		$j = 0;
		while ($j++ < 5)
		{
			$res = rand(0, count($rows) - 1);
			$idqs=$rows[$res]["idq"];
			$txtsql2 = $bdd->prepare("select * from choix_question where idq=?  and idmat =? and idn=?");
			$txtsql2->execute(array($rows[$res]['idq'], $rows[$res]['idmat'], $rows[$res]['idn']));
			$data = $txtsql2->fetchAll();
			echo '<div class="question">';
			echo "<h3>Q " . $i++ . ":" . $rows[$res]["question"] . "</h3>";	
			foreach ($data as $dt)
			{
				$v=$dt["valeur"];
				echo "<input type =radio name =$idqs value =$v />".$dt["choix"]."<br/>";
			}
			unset($rows[$res]);
			$rows = array_values($rows);
			echo '</div>';
		}	
		?>
		<div align="center">
		<input type="button" class="btn btn-info" value="Suivant" id="nextbtn"/>
		<input type="button" class="btn btn-info" value="Precedent" id="precbtn"/>
		<input type="hidden" name="niveau" value="<?php echo $idnv; ?>" />
		<input type="hidden" name="idmat" value="<?php echo $idmt; ?>" />
		<input type="hidden" name="nb_question" value="<?php echo $nb_question; ?>" />
		</div>
		
		
		<h5><u><a href="http://127.0.0.1/QCM/choixniveau.php "class="text-info">Quitter le test</a></u></h5>
		</form>
		
		<script src="jquery.js"></script>
		<script src="script.js"></script>
		
</div>		
   </body>
</html>
    
	