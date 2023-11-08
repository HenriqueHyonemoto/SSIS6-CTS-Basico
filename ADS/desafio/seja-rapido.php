<?php
session_start();
if ($_SESSION["nomevai"] != "") {
  
} else {
  header("Location: ../bb.php");
}
?>
<html>
  <head>

    <link href="../css/config.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <script src="js/scripts.js" type="text/javascript"></script>
    <title><?php include '../TTopo.php'; ?></title>
    <script src="../js/dez.js" type="text/javascript"></script>

  </head>
  <body onkeyup="teclas(event);" onselectstart="return false">
    <div class="princ">
      <hr>
      <h2><span class="badge badge-primary">Para completar a Fase, chame o professor e mostre como chegou nesta pagina.</span></h2>
      <?php
      echo "<h1><span class=\"badge badge-secondary\">Você está indo bem " . $_SESSION['nomevai'] . ". <br/><br/>Confio em você! <br/><br/>Só não erre! :/</span></h1>";
      ?>
      <img src="padlock-161059_640.png" alt='-' width="180" />
      <div class="cx" id='d1'></div>
      <div class="cx" id='d2'></div>
      <div class="cx" id='d3'></div>
      <div class="cx" id='d4'></div>
    </div>
    <h1 class="alert alert-warning" role="alert">Não pode haver <b>manipulação direta</b> em Inspecionar Elemento!</h1>
  <center>
    <button type="button" class="btn btn-lg btn-warning">01</button>
    <button type="button" class="btn btn-lg btn-warning">02</button>
    <button type="button" class="btn btn-lg btn-warning">03</button>
    <button type="button" class="btn btn-lg btn-warning">04</button>
    <button type="button" class="btn btn-lg btn-warning">05</button>
    <button type="button" class="btn btn-lg btn-warning">06</button>
    <button type="button" class="btn btn-lg btn-warning">07</button>
    <button type="button" class="btn btn-lg btn-warning">08</button>
    <button type="button" class="btn btn-lg btn-outline-warning">09</button>
    <button type="button" class="btn btn-lg btn-outline-warning">10</button>
  </center>
</body>
</html>
