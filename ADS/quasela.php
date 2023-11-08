<!DOCTYPE html>
<html>
  <head>
    <link href="css/config.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <script src="js/scripts.js" type="text/javascript"></script>
    <title><?php include './TTopo.php'; ?></title>
    <?php
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    

    session_start();
    if ($_SESSION["nomevai"] != "" && $login == "onucleo" && $pass == "2019") {
      echo "<h1 class=\"alert alert-warning\" role=\"alert\">Força ai " . $_SESSION["nomevai"] . " - " . $_SESSION["ravai"] . "<br/> Você está indo bem!"."</h1>";
      ?>
      <script language="JavaScript" type="text/javascript">
        var pass, i;
        pass = prompt("Você precisa descobrir mais uma senha!", "");
        if (pass == "seja-rapido") {
          window.location.href = "desafio/" + pass + ".php";
          i = 4;
        }
      </script>
      <?php
    } else {
      
    }
    ?>

  </head>
  <body>
    <div class = "princ">
      <h1 class = "alert alert-warning" role = "alert">Não desista tão rápido.</h1>
      <meta HTTP-EQUIV = 'Refresh' CONTENT = '2;URL=bb.php' >
    </div>

  <center>
    <button type="button" class="btn btn-lg btn-warning">01</button>
    <button type="button" class="btn btn-lg btn-warning">02</button>
    <button type="button" class="btn btn-lg btn-warning">03</button>
    <button type="button" class="btn btn-lg btn-warning">04</button>
    <button type="button" class="btn btn-lg btn-warning">05</button>
    <button type="button" class="btn btn-lg btn-warning">06</button>
    <button type="button" class="btn btn-lg btn-warning">07</button>
    <button type="button" class="btn btn-lg btn-outline-warning">08</button>
    <button type="button" class="btn btn-lg btn-outline-warning">09</button>
    <button type="button" class="btn btn-lg btn-outline-warning">10</button>
  </center>
</body>
</html>
