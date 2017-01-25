<?php

class controlador {
  public $rut;
  public $pass;
  public $nombre;
  public $ape_pat;
  public $ape_mat;
  public $email;
  public $tel_fijo;
  public $tel_cel;
  public $nro_depto;
  public $mes;
  public $monto;

public function conecta(){
  $hostname = "localhost";
  $database = "proyecto_condominio";
  $username = "root";
  $password = "";

   try {
   $conexion = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
   //print "OK. Conexion exitosa";
   return $conexion;
   }
   catch (PDOException $e) {
   print "Error: " . $e->getMessage();
   exit();
 }

}
  public function mostrarCobros($rut){
  $this->rut = $rut;

  $consulta = "SELECT * FROM tbl_cobroesp
               WHERE rut = :rut";

  $conexion = self::conecta(); //SELF llama a un metodo dentro de otro metodo.

  $resultado = $conexion->prepare($consulta);
  $resultado->execute(array(":rut" => $rut));

  if (!$resultado) {
    print "Error en la consulta";
  }else{
    return $resultado;
  }

}

public function buscar($rut, $pass){
$this->rut = $rut;
$this->pass = $pass;

$consulta = "SELECT count(*) FROM tbl_propietario
           WHERE rut = :rut AND pass = :pass";

$conexion = self::conecta(); //SELF llama a un metodo dentro de otro metodo.

$resultado = $conexion->prepare($consulta);
$resultado->execute(array(":rut" => $rut, ":pass"=>$pass));
if (!$resultado) {
  print "Error en la consulta";
}else{
  $registro = $resultado->fetchColumn();
  return $registro;
}
}

public function insertarPropietario($rut,$pass,$nombre,$ape_pat, $ape_mat, $email,$tel_fijo,$tel_cel,$nro_depto){
$this->rut = $rut;
$this->pass = $pass;
$this->nombre = $nombre;
$this->ape_pat = $ape_pat;
$this->ape_mat = $ape_mat;
$this->email = $email;
$this->tel_fijo = $tel_fijo;
$this->tel_cel = $tel_cel;
$this->nro_depto = $nro_depto;

$conexion = self::conecta();

$consulta = "INSERT INTO tbl_propietario (rut,pass,nombre,ape_pat,ape_mat,email,tel_fijo,tel_cel,n_depto)
VALUES  (:rut,:pass,:nombre,:ape_pat,:ape_mat,:email,:tel_fijo,:tel_cel,:nro_depto)";
$inserta = $conexion->prepare($consulta);

if ($inserta->execute(array(":rut"=>$rut,":pass"=>$pass,":nombre"=>$nombre,":ape_pat"=>$ape_pat
,":ape_mat"=>$ape_mat,":email"=>$email, ":tel_fijo"=>$tel_fijo, ":tel_cel"=>$tel_cel,":nro_depto"=>$nro_depto))) {
   return true;
}else{
    return false;
}
  }

  public function registraAbono($mes,$monto,$rut){

    $this->mes = $mes;
    $this->monto = $monto;
    $this->rut = $rut;

    $conexion = self::conecta();

    $consulta = "INSERT INTO tbl_abono (id_abono,mes,monto,rut)
    VALUES  ('',:mes,:monto,:rut)";

    $inserta = $conexion->prepare($consulta);

    if ($inserta->execute(array(":mes"=>$mes,":monto"=>$monto,":rut"=>$rut,))) {
       return true;
    }else{
        return false;
    }
  }

  /*public function seleccionTodo(){
   $conexion = self::conecta();
   $consulta = "SELECT * FROM tbl_producto GROUP BY nombre_prov";
   $resultado = $conexion->query($consulta);

   return $resultado;
 }*/

  public function actualizar($codigo, $nombre, $precio,$nombre_prov, $origen){
  $this->codigo = $codigo;
  $this->nombre = $nombre;
  $this->precio = $precio;
  $this->nombre_prov = $nombre_prov;
  $this->origen = $origen;

  $conexion = self::conecta();

  $consulta = "UPDATE tbl_producto SET nombre_articulo = :na, precio = :p, nombre_proveedor = :np, origen_proveedor = :op WHERE cod_articulo = :c";
  $respuesta = $conexion->prepare($consulta);
  if($respuesta->execute(array(":na"=>$nombre, ":p"=>$precio, ":np"=>$nombre_prov, ":op"=>$origen, ":c"=>$codigo))){
      print "Registro actualizado";
      return true;
  }else{
      print "No se actualizo registro";
      return false;
  }



  }

}
