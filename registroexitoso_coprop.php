<?php
include ("mantenedor/controlador.php");
//Valores a insertar en la base de datos
$rut=$_POST['rut'];
$pass=$_POST['pass'];
$nombre=$_POST['nombre'];
$ape_pat=$_POST['ape_pat'];
$ape_mat=$_POST['ape_mat'];
$email=$_POST['email'];
$tel_fijo=$_POST['tel_fijo'];
$tel_cel=$_POST['tel_cel'];
$nro_depto=$_POST['nro_depto'];

$registraCliente= new controlador();
//Inserta los valores previos
$resp=$registraCliente->insertarPropietario($rut,$pass,$nombre,$ape_pat, $ape_mat, $email,$tel_fijo,$tel_cel,$nro_depto);

if ($resp) {
  print "Registrado con exito";
    print '<META HTTP-EQUIV=Refresh CONTENT="0; URL=index.php">';
}else {
  print "Registro incorrecto";
}

?>
