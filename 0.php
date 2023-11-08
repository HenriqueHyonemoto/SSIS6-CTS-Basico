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
      if ($urlvai[3] != "ADS") {
        echo "<h1 class=\"alert alert-warning\" role=\"alert\">Querendo burlar a prova!?</h1><meta HTTP-EQUIV='Refresh' CONTENT='2;URL=bb.php'>";
      } else {
        session_start();
        if ($_SESSION["nomevai"] != "") {
          echo "<h2><span class=\"badge badge-primary\">";
          echo $_SESSION["nomevai"] . " - ";
          echo $_SESSION["ravai"];
          echo "</span></h2>";
          ?>
          <h1><span class="badge badge-secondary">Quebre o Hash e continue: MTIkZXFkJjthc2Q5OTAt</span></h1>
          <h2><span class="badge badge-secondary">Digite a senha que você descobriu, com base no hash acima.</span></h2>
          <div class="formcentro">
            <form name="Hash" action="1.php" method="POST" autocomplete="off">               
              <input autofocus class="form-control-lg"  onpaste="return false"  onclick="this.value = '';" type="text" size="30" name="senha" placeholder="Digite a Senha" required="required" pattern=".{15,}" />
              <input class="btn btn-danger btn-lg" type="submit" value="Validar Senha" />
            </form>
          </div>

          <?php
        } else {
          header("Location: bb.php", TRUE);
          echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=bb.php'>";
        }
      }
      ?>

    </div>
  <center>
    <button type="button" class="btn btn-lg btn-warning">01</button>
    <button type="button" class="btn btn-lg btn-warning">02</button>
    <button type="button" class="btn btn-lg btn-outline-warning">03</button>
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
