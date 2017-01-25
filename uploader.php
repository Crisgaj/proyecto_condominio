<?php
session_start();
$rut = $_SESSION['rut'];//sacar de la sesion o base de datos.
print $fecha = date("Ymd");
$carpeta = "/opt/lampp/htdocs/ProyectoCondominio/imagenes/evidencias/";
$_FILES['evidencia']['name'] = $rut.'_'.$fecha.'_'.$_FILES['evidencia']['name'];
$carpeta = $carpeta.basename( $_FILES['evidencia']['name']);
//$evidencia='noticia_'.$evidencia;

if(move_uploaded_file($_FILES['evidencia']['tmp_name'], $carpeta))
{
     print 'tmp: '.$_FILES [ 'evidencia' ][ 'tmp_name' ].'<br>'; // se debe insertar a la base de datos.
     print 'type: '.$_FILES [ 'evidencia' ][ 'type' ].'<br>';
     print 'size: '.$_FILES [ 'evidencia' ][ 'size' ].'<br>';
     print 'name: '.$_FILES [ 'evidencia' ][ 'name' ].'<br>';


    print "El archivo ". basename( $_FILES['evidencia']['name']). " ha sido subido";
}
else
{
echo "Ha ocurrido un error, trate de nuevo!";
}
