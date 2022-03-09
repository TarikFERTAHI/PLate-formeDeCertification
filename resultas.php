<!DOCTYPE html>
   <head>
      <title>Page d'accueil</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery/jquery.js"></script>
  <script src="bootstrap/jquery/popper.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
   <style>
  body {
  background-color: lightblue;
}
  h5{
  position: absolute;
  /*border: 1px solid red;*/
  top: 320px;
  left: 1070px;
}
.card{
    top: 100px;
  position: absolute;
  width: 1210px;
  height: 350px;
  left: 80px;
}
h3{
  /*position: absolute;*/
  top: 300px;
  left: 600px;
}
 
</style>
   </head>
   <body>
<div class="container-fluid bg-info">
        <div class="result">
    <?php
    session_start();
    if (!isset($_SESSION['idM']))
        header("Location: connexion.php");
    include_once "init.php";
    $len = 0;
    $correct_answers = 0;
    foreach ($_POST as $key => $value)
    {
        if ($key != "niveau" && $key != "idmat" && $key != "nb_question")
            $correct_answers += $value;
        if ($key == "nb_question")
            $len = $value;
    }
    if ( ($correct_answers/$len) > 0.7){ 

    $con = $bdd->prepare("INSERT INTO resultas(idmembre, res, idn, idmat, nb_question) VALUES(?,?,?,?,?)");
    $con->execute(array($_SESSION['idM'], $correct_answers, $_POST["niveau"], $_POST["idmat"], $len));
    }
    //echo '<div class="pseudo">' . $_SESSION['pseudo'] . '</div>';
    //echo '<div class="mail">' . $_SESSION['mail'] . '</div>';
    //echo "voila votre score pour ce test:";echo $correct_answers . " / " . $len;
    include_once "init.php";
    $p=$_SESSION['pseudo'];
 $m=$_SESSION['mail'];
 $s=$correct_answers . " / " . $len;
 $n=$_POST['niveau'];
 $mat= $_POST["idmat"];
 



    ?>   
  
    <div class="card text-dark" >
        <div class="card-header">
            <div class="text-center"><h1 class="card-text"><small class="text-info"><u><strong>Résultat</strong></u></small></h1></div>
    <h2 class="card-title"><small class="text-dark"><strong>  Nom et Prénom :</strong> </small><td></td><small class="text-info"><?php  ; echo $p ?></small> </h2>
    <h2 class="card-title"><small class="text-dark"> <strong> E-mail :</strong> </small><td></td><small class="text-info"><?php  ; echo $m ?></small> </h2>
    <h2 class="card-title"><small class="text-dark"><strong>  Score :</strong> </small><td></td><small class="text-info"><?php  ; echo $s ?></small> </h2>
    <h2 class="card-title"><small class="text-dark"><strong>  Niveau :</strong> </small><td></td><small class="text-info"><?php  ; echo $n ?></small> </h2>
    <h2 class="card-title"><small class="text-dark"><strong>  Matière : </strong></small><td></td><small class="text-info">
     <?php if ($mat == 4){
     echo "Réseau Informatique" ;
    }
    elseif($mat== 5){
        echo "Système D'exploitation Propriétaire";
    }
    else{
        echo "Linux";
    } 
     ?>
    </small> </h2>
    <h3><a href="ter.php" class="btn btn-info">Terminer</a><h3>
    <h5 class="card-title"><u><a href="http://127.0.0.1/QCM/choixniveau.php" class="text-info">Refaire le test</a></u></h5>
            </div>
        </div>
    </div>
</div>


            <script src="jquery.js"></script>
            <script src="script.js"></script>
    </body>

</html>