<?php
  session_start();
  if(isset($_SESSION['rut'])){
    include_once "header.php";
    print '<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Informes para el administrador</title>
    <link rel="stylesheet" type="text/css" href="estilos/style.css"/>
    <!--Links Boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script type="text/javascript" src="funciones.js"></script>
  </head>

  <body>

    <?php
      include_once "header.php";
    ?>

  <div class="jumbotron">
      <form>
        <h3>Informes para el administrador</h3><br>
        <label for="rut_coprop">Ingrese rut copropietario :</label>
        <input type="text" class="form-control" name="rut_coprop" id="rut_coprop"><br><br>
        <button class="btn btn-lg btn-primary btn-block" name="buscar" id="buscar">Buscar</button><br><br>

        <table style="width:100px"class="table table-bordered" name="informe" id="informe">
          <thead>
            <tr>
              <td><strong>Cuenta</strong></td>
              <td><strong>Monto</strong></td>
              <td><strong>Pago</strong></td>
              <td><strong>Fecha</strong></td>
            </tr>

            <tbody>
              <tr>
                <td>Gas</td>
                <td>20000$</td>
                <td>10000$</td>
                <td>18/05/2015</td>
              </tr>

              <tr>
                <td>Luz</td>
                <td>30000$</td>
                <td>20000$</td>
                <td>22/05/2015</td>
              </tr>

              <tr>
                <td>Agua</td>
                <td>40000$</td>
                <td>40000$</td>
                <td>27/05/2015</td>
              </tr>
            </tbody>

          </thead>

        </table>

        <button class="btn btn-primary" name="import-excel" id="import-excel">Importar a Excel</buton>-->

      </form>
    </div>
  </body>

</html>';
  include_once "footer.php";
}else {
  print "Debe iniciar sesión.";
  print '<META HTTP-EQUIV=Refresh CONTENT="3; URL=login.php">';
}
