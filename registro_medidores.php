<?php
  session_start();
  if(isset($_SESSION['rut'])){
    include_once "header.php";
    print '<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <title>Registro medidores</title>
    <link rel="stylesheet" type="text/css" href="estilos/style.css"/>
    <!--Links Boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <body>

      <div class="jumbotron">

        <form method= POST enctype="multipart/form-data" action="uploader.php">
          <h3>Registro medidores</h3> <br>

          <label for="cuentas">Seleccione cuenta</label>
          <select class="form-control" name="sel-1" id="sel-1" onchange="eligeCuenta()">

            <option value="1">Agua</option>
            <option value="2">Luz</option>

          </select><br>

        <div name="cuenta-agua" id="div-1">
          <label><u>Cuenta de agua</u></label><br>
          <input type="text" class="form-control" placeholder="Ingrese monto" name="cuenta_agua" id="cuenta_agua"><br><br>
        </div>

        <div name="cuenta-luz" id="div-2">
          <label><u>Cuenta de luz</u></label><br>
          <input type="text" class="form-control" placeholder="Ingrese monto" name="cuenta_luz" id="cuenta_luz"><br><br>
        </div>

        <div id="div-3">
          <input type="file" name="evidencia" accept="image/*"><br><br>
          <label>Total a pagar:</label>
          <input type="text" class="form-control" disabled name="total" id="total"><br><br>

          <input type="submit" class="btn btn-lg btn-primary btn-block" id="sub1">
        <div>

        </form>
      </div>
    <script type="text/javascript" src="js/ocultar.js"></script>
  </body>

</html>';
  include_once "footer.php";
}else {
  print "Debe iniciar sesión.";
  print '<META HTTP-EQUIV=Refresh CONTENT="3; URL=login.php">';
}
