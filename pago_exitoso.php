<?php
session_start();
include ("mantenedor/controlador.php");
//Valores a insertar en la base de datos
$rut=$_SESSION['rut'];
$mes=$_POST['mes'];
$monto=$_POST['monto'];

$registraPago= new controlador();
//Inserta los valores previos
$resp=$registraPago->registraAbono($mes,$monto,$rut);

if ($resp) {
  print  "Se ha abonado correctamente.";
    print '<META HTTP-EQUIV=Refresh CONTENT="3; URL=index.php">';
}else {
  print "Abono incorrecto.";
  print '<META HTTP-EQUIV=Refresh CONTENT="3; URL=registro_pagos.php">';
}

?>
