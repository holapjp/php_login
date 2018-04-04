<?php

class Conexion{


  //Atributos
  private $conexion;
  private $datos;

  //Métodos

  public function __construct(){
    $this->conexion = new PDO("mysql:host=localhost;dbname=trabajo_curso;","root","");
    $this->conexion->query("SET NAMES 'utf8'");
  }


  public function createProducto(){
    $sql = "INSERT INTO producto VALUES(:nombre,:precio,:cantidad);";
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
      $datos =  $stmt->fetch(PDO::FETCH_ASSOC);
      return $datos;
  }








}










 ?>
