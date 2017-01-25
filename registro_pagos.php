
<?php

  session_start();
  if(isset($_SESSION['rut'])){
    include_once "header.php";
    print '<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Recaudacion y abonos</title>
    <link rel="stylesheet" type="text/css" href="estilos/style.css"/>
    <!--Links Boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="jumbotron">
        <form method=POST action="pago_exitoso.php" onsubmit="return validaMonto();">
          <h3>Abonos y pagos</h3><br>

          <label for="abono">Ingrese monto de abono:</label>
          <input type="text" class="form-control" name="monto" id="monto"><br><br>

          <label for="mes">Seleccione mes:</label>
          <select class="form-control" name="mes" id="mes">
            <option value="1">Enero</option>
            <option value="2">Febrero</option>
            <option value="3">Marzo</option>
            <option value="4">Abril</option>
            <option value="5">Mayo</option>
            <option value="6">Junio</option>
            <option value="7">Julio</option>
            <option value="8">Agosto</option>
            <option value="9">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
          </select><br><br>

            <input type="submit" class="btn btn-lg btn-primary btn-block">

        </form>
    </div>
    <script type="text/javascript" src="js/funciones.js"></script>
  </body>

</html>';
  include_once "footer.php";
}else {
  print "Debe iniciar sesión.";
  print '<META HTTP-EQUIV=Refresh CONTENT="3; URL=login.php">';
}
