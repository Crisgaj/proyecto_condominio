<?php
include 'mantenedor/controlador.php';
$rut = $_POST['rut'];
$objData= new controlador();
$array = $objData->mostrarCobros($rut);
 ?>

<!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Resultados</title>
     <link rel="stylesheet" type="text/css" href="estilos/style.css"/>
     <!--Links Boostrap-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
     <script type="text/javascript" src="funciones.js"></script>
   </head>
   </head>
   <body>
     <?php include_once "header.php"; ?>
     <div class="jumbotron">
       <h3>Cobros especiales</h3><br>
        <table class="table table-hover table-bordered" name="informe" id="informe">
           <thead>
             <tr>
               <th><strong>Nombre</strong></th>
               <th><strong>Monto</strong></th>
               <th><strong>Fecha</strong></th>
             </tr>
            </thead>

             <tbody>
               <?php
                  foreach ($array as $row) {
                ?>

                <tr>
                  <td><?php echo $row['nombre_cobro']; ?></td>
                  <td><?php echo $row['monto']; ?></td>
                  <td><?php echo $row['fecha']; ?></td>
                </tr>
                <?php } ?>
             </tbody>
         </table>
      </div>
   </body>
 </html>
