<!DOCTYPE html>
<html>
  <head>   
    <meta name="keywords" content="Se está valendo, porque usar uma pagina em branco? Sem texto, sem formulario, sem nada de mais. Será que estou esquecendo de algum arquivo que eu poderia ler?" />
    <link href="css/config.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <script src="js/scripts.js" type="text/javascript"></script>
    <title><?php include './TTopo.php'; ?></title>

  </head>
  <body>
    <div class="formcentro">
      <?php
      $urlvem = $_SERVER['HTTP_REFERER'];
      $urlvai = explode("/", $urlvem);

      if ($urlvai[3] != "ADS") {
        echo "<h1>Querendo burlar a prova de novo!?</h1><meta HTTP-EQUIV='Refresh' CONTENT='2;URL=bb.php'>";
        echo "<img src=\"pictures/triste.png\" width=\"30%\" alt=\"O que fazer agora?\"/>";
      } else {

        session_start();
        if ($_SESSION["nomevai"] == "") {
          header("Location: bb.php", TRUE);
          echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=bb.php'>";
        } else {
          echo "<h1><span class=\"badge badge-secondary\">O que fazer agora?<br/><br/>";
          echo "<img src=\"pictures/duvida.png\" width=\"35%\" alt=\"O que fazer agora?\"/>";
          echo $_SESSION["nomevai"] . " - ";
          echo $_SESSION["ravai"] . "</span></h1>";
        }
      }
      ?>
    </div>

    <div class="titulo">Não tem nada aqui!</div>
  <center>
    <button type="button" class="btn btn-lg btn-warning">01</button>
    <button type="button" class="btn btn-lg btn-warning">02</button>
    <button type="button" class="btn btn-lg btn-warning">03</button>
    <button type="button" class="btn btn-lg btn-warning">04</button>
    <button type="button" class="btn btn-lg btn-outline-warning">05</button>
    <button type="button" class="btn btn-lg btn-outline-warning">06</button>
    <button type="button" class="btn btn-lg btn-outline-warning">07</button>
    <button type="button" class="btn btn-lg btn-outline-warning">08</button>
    <button type="button" class="btn btn-lg btn-outline-warning">09</button>
    <button type="button" class="btn btn-lg btn-outline-warning">10</button>
  </center>


</body>
</html>
