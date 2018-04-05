<?php

class Conexion{


  //Atributos
  private $conexion;
  private $datos;

  //Métodos

  public function __construct(){
    $this->conexion = new PDO("mysql:host=localhost;dbname=LOGIN;","root","");
    $this->conexion->query("SET NAMES 'utf8'");
  }


  public function createProduct($nombre,$precio,$cantidad){
    $sql = "INSERT INTO productos VALUES(null, :nombre, :precio, :cantidad);";
    $stmt = $this->conexion->prepare($sql);
    $stmt->bindParam(":nombre",$nombre);
    $stmt->bindParam(":precio",$precio);
    $stmt->bindParam(":cantidad",$cantidad);
    if($stmt->execute()){
      return true;
    }else{
      return false;
    }
  }


  public function getProducts(){
    $stmt = $this->conexion->prepare("CALL getProducts");
    $stmt->execute();
    while($datos =  $stmt->fetch(PDO::FETCH_ASSOC)){
      $this->datos[] =  $datos;
    }
    return $this->datos;
  }


  public function createUser($n,$a,$c,$p,$t){
    $sql = "INSERT INTO users VALUES(null, :nombre, :apellido, :correo, :password, :telefono);";
    $stmt = $this->conexion->prepare($sql);
    $stmt->bindParam(":nombre",$n);
    $stmt->bindParam(":apellido",$a);
    $stmt->bindParam(":correo",$c);
    $stmt->bindParam(":password",$p);
    $stmt->bindParam(":telefono",$t);
    if($stmt->execute()){
        return true;
    }else{
      return false;
    }
  }

  public function buscarUsuario($email){
      $stmt = $this->conexion->prepare("CALL getUser(:email);");
      $stmt->bindParam(":email",$email);
      $stmt->execute();
      $this->$datos = $stmt->fetch(PDO::FETCH_ASSOC);
      return $this->$datos;
  }








}










 ?>
