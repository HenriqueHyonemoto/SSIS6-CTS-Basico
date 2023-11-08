<!DOCTYPE html>
<html>
  <head>
    <style>
      a:link, a:visited, a:hover{
        color:darkgray !important;
        font-size: 10px !important;
      }
    </style>
    <link href="css/config.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <script src="js/scripts.js" type="text/javascript"></script>
    <title><?php include './TTopo.php'; ?></title>
  </head>
  <body>
    <div class="princ">
      <?php
      session_start();
      $urlvem = $_SERVER['HTTP_REFERER'];
      $urlvai = explode("/", $urlvem);

      if ($urlvai[3] != "ADS") {
        echo "<h1 class=\"alert alert-warning\" role=\"alert\">Querendo burlar a prova!?</h1><meta HTTP-EQUIV='Refresh' CONTENT='2;URL=bb.php'>";
      } else {

        if ($_SESSION["nomevai"] != "") {
          $rsenha = $_POST['senha'];
          $senha = base64_encode($rsenha);
          $valida = 'MTIkZXFkJjthc2Q5OTAt';
          if ($senha == $valida) {
            echo "<h1><span class=\"badge badge-secondary\">Fase Completa: Chame o professor!</span></h1>";
            echo "<img src=\"pictures/ok.png\"/>";
            echo "<div class='titulo'>Prova de Segurança! Siga para a pagina <a href=''>valendoo.php</a></div>";
          } else {
            echo "<div class=\"formcentro\"><h1 class=\"alert alert-warning\" role=\"alert\">Errooouuuuuuu!!!!</h1></div><meta HTTP-EQUIV='Refresh' CONTENT='2;URL=bb.php'>";
          }
        } else {
          echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=bb.php'>";
        }
      }
      ?>
    </div>
  <center>
    <button type="button" class="btn btn-lg btn-warning">01</button>
    <button type="button" class="btn btn-lg btn-warning">02</button>
    <button type="button" class="btn btn-lg btn-warning">03</button>
    <button type="button" class="btn btn-lg btn-outline-warning">04</button>
    <button type="button" class="btn btn-lg btn-outline-warning">05</button>
    <button type="button" class="btn btn-lg btn-outline-warning">06</button>
    <button type="button" class="btn btn-lg btn-outline-warning">07</button>
    <button type="button" class="btn btn-lg btn-outline-warning">08</button>
    <button type="button" class="btn btn-lg btn-outline-warning">09</button>
    <button type="button" class="btn btn-lg btn-outline-warning">10</button>
  </center>
</body>
</html>
