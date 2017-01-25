<?php
  session_start();
  if(isset($_SESSION['rut'])){
    include_once "header.php";
    print '<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro Co-propietario</title>
    <link rel="stylesheet" type="text/css" href="estilos/style.css"/>
    <!--Links Boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>

  <body>

    <div class="jumbotron">
        <form method=POST action="registroexitoso_coprop.php" onsubmit="return validaCampos();return validaRut();">

          <h3>Registro</h3>

          <label >Ingrese sus datos:</label><br><br>

          <label>Rut</label>
          <input type="text" class="form-control" name="rut" id="rut">

          <label>Contraseña</label>
          <input type="password" class="form-control" name="pass" id="pass">

          <label>Nombre</label>
          <input type="text" class="form-control" name="nombre" id="nombre">

          <label>Apellido paterno</label>
          <input type="text" class="form-control" name="ape_pat" id="ape_pat">

          <label>Apellido materno</label>
          <input type="text" class="form-control" name="ape_mat" id="ape_mat">

          <label>Email</label>
          <input type="text" class="form-control" name="email" id="email">

          <label>Telefono fijo</label>
          <input type="text" class="form-control" name="tel_fijo" id="tel_fijo">

          <label>Celular</label>
          <input type="text" class="form-control" name="tel_cel" id="tel_cel">

          <label>Numero departamento</label>
          <input type="text" class="form-control" name="nro_depto" id="nro_depto"><br>

          <input type="submit" value="Registrar" class="btn btn-lg btn-primary btn-block">
          <button type="reset" class="btn btn-lg btn-danger btn-block">Restablecer</button>
        </form>
    <div>
  <script type="text/javascript" src="js/funciones.js"></script>
  <script type="text/javascript" src="js/validarut.js"></script>
  </body>

</html>';
  include_once "footer.php";
}else {
  print "Debe iniciar sesión.";
  print '<META HTTP-EQUIV=Refresh CONTENT="3; URL=login.php">';
}
