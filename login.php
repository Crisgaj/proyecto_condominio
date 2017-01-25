<!DOCTYPE html>
<html>

  <head>
    <meta name="viewport" content="width=device-width" initial-scale=1.0>
    <title>Login usuario</title>
    <link rel="stylesheet" type="text/css" href="estilos/login.css">
    <!--Links Boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>

  <body>

    <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Condominios Zum</a>
          </div>
        </div>
      </nav>


    <div class="jumbotron">
      <form action="valida.php" method="post" onsubmit="return validaLogin();return validaRut();">

        <label for="user">Ingrese su rut :</label>
        <input type="text" class="form-control" name="rut" id="rut"><br>

        <label for="pass">Contraseña :</label>
        <input type="password" class="form-control" name="pass" id="pass"><br>

        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Entrar">

      </form>
    </div>

    <?php include_once "footer.php" ?>

    <script type="text/javascript" src="js/funciones.js"></script>
    <script type="text/javascript" src="js/validarut.js"></script>
  </body>

</html>
