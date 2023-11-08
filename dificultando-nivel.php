<!DOCTYPE html>
<html>
  <head>
    <link href="css/config.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <script src="js/scripts.js" type="text/javascript"></script>
    <title><?php include './TTopo.php'; ?></title>
  </head>
  <body>
    <div class="princ">
      <?php
      $urlvem = $_SERVER['HTTP_REFERER'];
      $urlvai = explode("/", $urlvem);
      
      if ($urlvai[5] != "dificultando.php") {
        echo "<h1 class=\"alert alert-warning\" role=\"alert\">Querendo burlar a prova!?</h1><meta HTTP-EQUIV='Refresh' CONTENT='2;URL=bb.php'>";
      } else {

        session_start();
        if ($_SESSION["nomevai"] != "") {
          
        } else {
          echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=bb.php'>";
        }

        $pass = md5($_POST['pass'] . "abc");
        $quase = $_POST['passwd'];

        if ($quase != $pass) {
          echo "<h1 class=\"alert alert-warning\" role=\"alert\">Hum! Não foi dessa vez, aguarde!</h1>";
          echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=bb.php'>";
        } else {
          echo "<h1><span class=\"badge badge-secondary\">Parabéns! Vamos complicar um pouco.</span></h1>";
          
          echo "<div class=\"formcentro\">";
          echo "<form action=\"quasela.php\" method=\"post\" autocomplete=\"off\">";
          echo "<div class=\"form-group\">";
          echo "<input type=\"text\" required=\"required\" class=\"form-control form-control-lg\" size=\"50\" placeholder=\"Ache o Login\" title=\"Login\" name=\"login\" autofocus />";
          echo " </div>";
          echo "<div class=\"form-group\">";
          echo "<input type=\"password\" required=\"required\" class=\"form-control form-control-lg\" size=\"50\" placeholder=\"Ache a Senha\" title=\"Senha\" maxlength=\"9\" name=\"pass\" /></p>";
          echo "<p><input class=\"btn btn-success btn-lg\" type=\"submit\" value=\"Continuar Prova\" /> </p>";
          echo "</div>";
          echo "</form>";

          echo "</div>";
        }
      }
      ?>

    </div>
  <center>
    <button type="button" class="btn btn-lg btn-warning">01</button>
    <button type="button" class="btn btn-lg btn-warning">02</button>
    <button type="button" class="btn btn-lg btn-warning">03</button>
    <button type="button" class="btn btn-lg btn-warning">04</button>
    <button type="button" class="btn btn-lg btn-warning">05</button>
    <button type="button" class="btn btn-lg btn-warning">06</button>
    <button type="button" class="btn btn-lg btn-outline-warning">07</button>
    <button type="button" class="btn btn-lg btn-outline-warning">08</button>
    <button type="button" class="btn btn-lg btn-outline-warning">09</button>
    <button type="button" class="btn btn-lg btn-outline-warning">10</button>
  </center>
</body>
</html>
