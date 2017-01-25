<?php

  class insertar{

    public $rut;
    public $contraseña;
    public $nombre;
    public $ape_pat;
    public $ape_mat;
    public $email;
    public $tel_fijo;
    public $tel_cel;
    public $n_depto;

      public function insertPropietario(){

        $model = new conexion();
        $conexion = $model->conecta();
        $query = "INSERT INTO tbl_propietario (rut,contraseña,nombre,ape_pat,ape_mat,email,tel_fijo,tel_cel,n_depto)";
        $query .= "VALUES (:nombre, :contraseña, :ape_pat, :ape_mat, :email, :tel_fijo, :tel_cel,:n_depto)";
        $consulta = $conexion->prepare($query);
        $consulta->bindParam(':rut', $this->rut);
        $consulta->bindParam(':contraseña', $this->contraseña);
        $consulta->bindParam(':nombre', $this->nombre);
        $consulta->bindParam(':ape_pat', $this->ape_pat);
        $consulta->bindParam(':ape_mat', $this->ape_mat);
        $consulta->bindParam(':email', $this->email);
        $consulta->bindParam(':tel_fijo', $this->tel_fijo);
        $consulta->bindParam(':tel_cel', $this->tel_cel);
        $consulta->bindParam(':n_depto', $this->n_depto);

        if (!consulta){

          $this->mensaje = $conexion->errorInfo();

        }else {
          $consulta->execute();
          $this->mensaje = 'Registro exitoso';
        }


      }


  }






 ?>
