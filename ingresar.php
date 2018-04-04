<?php

require_once "conexion.php";

  if(!empty($_POST['password1'] && !empty($_POST['usuario']))){
    $c = new Conexion();
    $datos = $c->buscarUsuario($_POST['usuario']);
      if(count($datos) > 0 && password_verify($_POST['password1'],$datos['password'])){
        session_start();
        $_SESSION['id_user'] =  $datos['id'];
        header("Location: index.php?exito=2");
      }else{
        header("Location: login.php?error=2");
      }
  }else{
    header("Location: login.php");
  }
 ?>
