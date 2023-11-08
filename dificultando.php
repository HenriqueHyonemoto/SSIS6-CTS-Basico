<?php
session_start();
if ($_SESSION["nomevai"] != "") {
  $nome = $_SESSION["nomevai"];
} else {
  header("Location: bb.php");
}
$imp = md5($_SESSION["ravai"] . "abc");
?>
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
      <h1><span class="badge badge-primary"> <?php echo $nome; ?></span></h1>
      <h1><span class="badge badge-secondary"> Para completar a Fase, chame o professor e mostre como chegou aqui!</span></h1>
      <h1><span class="badge badge-secondary"> Para alcançar o próximo nível digite sua senha.</span></h1>
      <div class="formcentro">
        <form action="dificultando-nivel.php" method="post" autocomplete="off">
          <input type="text" class="form-control-lg" size="30" onpaste="return false" placeholder="Digite sua senha!" name="pass" required="required" autofocus onclick="this.value = '';"/>
          <input type="hidden" value="<?php echo $imp; ?>" name="passwd">
          <input class="btn btn-danger btn-lg" type="submit" value="Mantenha Foco" />
        </form>
      </div>
    </div>
  <center>
    <button type="button" class="btn btn-lg btn-warning">01</button>
    <button type="button" class="btn btn-lg btn-warning">02</button>
    <button type="button" class="btn btn-lg btn-warning">03</button>
    <button type="button" class="btn btn-lg btn-warning">04</button>
    <button type="button" class="btn btn-lg btn-warning">05</button>
    <button type="button" class="btn btn-lg btn-outline-warning">06</button>
    <button type="button" class="btn btn-lg btn-outline-warning">07</button>
    <button type="button" class="btn btn-lg btn-outline-warning">08</button>
    <button type="button" class="btn btn-lg btn-outline-warning">09</button>
    <button type="button" class="btn btn-lg btn-outline-warning">10</button>
  </center>
</body>
</html>