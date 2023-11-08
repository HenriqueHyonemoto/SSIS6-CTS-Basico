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
      <div class="formcentro">
        <?php
        $aa = $_POST["ra"];
        $pronts = array("VP123456");
        $urlvem = $_SERVER['HTTP_REFERER'];
        $urlvai = explode("/", $urlvem);

        if (in_array($aa, $pronts) && $urlvai[3] == "ADS") {
          echo "<span class=\"alert alert-success\" role=\"alert\">Muito Bom!<br/>";
          session_start();
          $_SESSION["nomevai"] = $_POST['nome'];
          $_SESSION["ravai"] = $_POST['ra'];
          echo $_SESSION["nomevai"] . " - " . $_SESSION["ravai"];
          echo "<br/>Continue Assim!<br/>";
          echo "<a href=\"0.php\" class=\"badge badge-success\">Siga</a></span>";
        } else {
          echo "<h1><span class=\"badge badge-secondary\">:/ - Try Again!!</span></h1>";
          echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=bb.php'>";
        }
        ?>
      </div>
    </div>
  <center>
    <button type="button" class="btn btn-lg btn-warning">01</button>
    <button type="button" class="btn btn-lg btn-outline-warning">02</button>
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