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
    <h1><span class="badge badge-secondary">Avaliação de Segurança da Informação</span></h1>
    <div class="princ">
      <div class="formcentro">
        <form action="aa.php" method="post" autocomplete="off">
          <div class="form-group">
            <input type="text" required="required" class="form-control form-control-lg" size="50" placeholder="Primeiro Nome" title="Seu primeiro nome" name="nome" autofocus />
          </div>
          <div class="form-group">
            <input type="text" required="required" class="form-control form-control-lg" size="50" placeholder="Prontuario iniciado com VP" title="Preencha com Prontuário: VPXXXXXXX" maxlength="9" name="ra" /></p>
            <p><input class="btn btn-success btn-lg" type="submit" value="Continuar Prova" /> </p>
          </div>
        </form>
      </div>
    </div>
  <center>
    <button type="button" class="btn btn-lg btn-outline-warning">01</button>
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
</html>
