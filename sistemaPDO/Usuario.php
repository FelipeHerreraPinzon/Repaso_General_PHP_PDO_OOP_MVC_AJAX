<?php

require_once("autoload.php");

class Usuario extends Conexion
{
      private  $strNombre;
      private  $intTelefono;
      private  $strEmail;
      private  $conexion;


     public function __construct()
     {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->conectar();
     }

     public function insertarUsuario(string $nombre, int $telefono, string $email)
     {
        $this->strNombre = $nombre;
        $this->intTelefono = $telefono;
        $this->strEmail = $email;


        $sql = "INSERT INTO usuario(nombre, telefono, email) VALUES (?,?,?)";
        $insert = $this->conexion->prepare($sql);
        $arrayData = array($this->strNombre, $this->intTelefono, $this->strEmail);
        $resultInsert = $insert->execute($arrayData);
        $idInsert = $this->conexion->lastInsertId();
        return $idInsert;

     }

     public function getUsuarios()
     {
        $sql = "SELECT * FROM usuario";
        $execute = $this->conexion->query($sql);
        $request = $execute->fetchAll(PDO::FETCH_ASSOC);
        return $request;
     }

     public function updateUser(int $id, string $nombre, int $telefono, string $email)
     {
        $this->strNombre = $nombre;
        $this->intTelefono = $telefono;
        $this->strEmail = $email;
        $sql = "UPDATE usuario SET nombre=?, telefono=?, email=? WHERE id=$id";
        $update = $this->conexion->prepare($sql);
        $arrayData = array($this->strNombre, $this->intTelefono, $this->strEmail);
        $resExcecute = $update->execute($arrayData);
        return $resExcecute;
     }


     public function getUser(int $id)
     {
        $sql = "SELECT * FROM usuario WHERE id = ?";
        $arrayWhere = array($id);
        $query = $this->conexion->prepare($sql);
        $query->execute($arrayWhere);
        $request = $query->fetch(PDO::FETCH_ASSOC);
        return $request;
     }


     public function deleteUser(int $id)
     {
        $sql = "DELETE FROM usuario WHERE id = ?";
        $arrayWhere = array($id);
        $delete = $this->conexion->prepare($sql);
        $delete = $delete->execute($arrayWhere);
        return $delete;
     }







}


?>








