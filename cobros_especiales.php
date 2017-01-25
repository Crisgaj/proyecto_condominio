<?php
  session_start();
  $rut = $_SESSION['rut'];
  if(isset($_SESSION['rut'])){
    include_once "header.php";
    print '<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <title>Cobros especiales</title>
      <link rel="stylesheet" type="text/css" href="estilos/style.css"/>
      <!--Links Boostrap-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>

    <body>
          <div class="jumbotron">
            <form method=POST action="resultados_cobroesp.php" onsubmit="return validaCobro();return validaRut();">
              <h3>Cobros especiales</h3><br>
              <label for="rut">Ingrese su rut:</label>
              <input type="text" class="form-control" name="rut" id="rut"><br><br>
              <div name="div-4" id="div-4">
              <label for="monto">Ingrese monto cobro especial:</label>
              <input type="text" class="form-control" name="monto" id="monto"><br><br>

              <label for="serv_esp">Seleccione tipo de cobro especial :</label>

              <select class="form-control" name="serv_esp" id="serv_esp">
                <option>Espacios comunes</option>
                <option>Servicios de la comunidad</option>
                <option>Multas</option>
                <option>Cuota especial</option>
              </select><br>
              </div>
              <input type="submit" class="btn btn-lg btn-primary btn-block">
          </form>
        </div>
        <script type="text/javascript" src="js/funciones.js"></script>
        <script type="text/javascript" src="js/validarut.js"></script>
    </body>

  </html>';
  include_once "footer.php";
}else {
  print "Debe iniciar sesión.";
  print '<META HTTP-EQUIV=Refresh CONTENT="3; URL=login.php">';
}
?>
