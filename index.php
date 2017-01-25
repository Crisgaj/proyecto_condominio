<?php
  session_start();
  if(isset($_SESSION['rut'])){
    include_once "header.php";
    print '<!DOCTYPE html>
    <html>

      <head>
        <meta charset="utf-8">
        <title>Inicio</title>
        <!--Implementacion CSS-->
        <link rel="stylesheet" type="text/css" href="estilos/index.css">
        <!--Links Boostrap--->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

      </head>

      <body>

        <div class="jumbotron">
          <h3><b>Proyecto de condominio</b></h3>
          <img src="imagenes/condominio.jpg" class="img-rounded" alt="Imagen no disponible" width="480px" height="360px" id="condominio"/>
          <p>Taller de Construcción de Software</p>
          <p>Cristopher Gajardo</p>
        <div>

      </body>

    </html>';
    include_once "footer.php";
  }else {
    print "Debe iniciar sesión.";
    print '<META HTTP-EQUIV=Refresh CONTENT="3; URL=login.php">';
  }

 ?>
