<?php

class conexion{

function conecta(){
$hostname = "localhost";
$database = "proyecto_condominio";
$username = "root";
$password = "";

try {
$conexion = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
print "OK. Conexion exitosa";
return $conexion;
}
catch (PDOException $e) {
print "Error: " . $e->getMessage() . "
";
exit();
}

}
}
