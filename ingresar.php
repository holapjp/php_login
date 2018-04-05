<?php
session_start();

require_once "conexion.php";

  if(!empty($_POST['password1'] && !empty($_POST['usuario']))){
    $c = new Conexion();
    $pass = $_POST['password1'];
    $email = $_POST['usuario'];
    $datos = $c->buscarUsuario($_POST['usuario']);
      if(count($datos) > 0 && password_verify($pass,$datos['password']) ){
        $_SESSION['id_user'] =  $datos['id'];
        $_SESSION['user_name'] =  $datos['nombre'];
        header("Location: index.php?exito=2");
      }else{
        header("Location: login.php?error=2");
      }
  }else{
    header("Location: login.php");
  }
 ?>
