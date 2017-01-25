<?php
include 'mantenedor/controlador.php';

$rut = $_POST['rut'];
$pass = $_POST['pass'];
//instancia
$obj = new controlador();
$res = $obj->buscar($rut, $pass);

if($res == 1){
    print "Bienvenido,espere unos segundos para ser enviado a su cuenta.";
    print '<META HTTP-EQUIV=Refresh CONTENT="5; URL=index.php">';

    session_start();
    $_SESSION['rut'] = $rut;

}else{

   print "Usuario o contraseña incorrectos.";
   print '<META HTTP-EQUIV=Refresh CONTENT="2; URL=login.php">';

}
