<html>
<head>
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
h5 {
  background-color: black;
  color: white;
  
  position: absolute;
  /*border: 1px solid red;*/
  top: 20px;
  right: 40px;
}
form {
  position: absolute;
  /*border: 1px solid red;*/
  top: 110px;
  left: 170px;
}
h3 {
   position: absolute;
  /*border: 1px solid red;*/
  top: 100px;
  left: 400px;
  font-size: 40px;
}
Select {
	border-style: inset double;
	border-width: 5px;
	/*background-color:rgb(241, 255, 254);*/
	
 
	}

</style>
</head>
<body>
<h2><div class="container-fluid  text-dark"></h2>

<h5><a href="http://127.0.0.1/QCM/deconnexion.php" > <button>Déconnexion</button></a></h5>
<form method ="post" action ="qcm.php">
<h4><label for="idmt"><strong>Nom de Matière :</strong></label><tr></tr><td></td>&nbsp;&nbsp;&nbsp;<Select name ="idmt"></h4>
				<?php
				session_start();
				print_r($_SESSION);
				if (!isset($_SESSION["idM"]))
				{
					header("Location: connexion.php");
					exit();
				}
				$bdd = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
					$data = $bdd->prepare("SELECT * FROM matieres");
					$data->execute();
					$rows = $data->fetchAll();
					foreach ($rows as $row)
					{
						echo "<option value =" .$row['idmat'] . ">" . $row['matiere'] . "</option>";
					}
				?>
					</select><br />
<h4><label for="idnv"><strong>Niveau :</strong></label><td></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<Select name ="idnv"></h4>
				<?php
					$data = $bdd->prepare("SELECT * FROM niveaux");
					$data->execute();
					$rows = $data->fetchAll();
					foreach ($rows as $row)
					{
						echo "<option value =" .$row['idn'] . ">" . $row['niveau'] . "</option>";
					}
				?>
					</select><br />

<h3><input type="submit" name="ok" class="btn btn-info" value ="Valider" /></h3>
</form>
		
	 
			
		
</div>
</body>
</html>