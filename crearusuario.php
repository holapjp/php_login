<?php

  require_once 'conexion.php';

  $crear = new Conexion();
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['correo'];
    $pass = $_POST['password'];
    $pass = password_hash($pass, PASSWORD_BCRYPT);
    $telefono = $_POST['telefono'];

  if($crear->createUser($nombre, $apellido, $telefono, $email,$pass)){
    header("Location: singup.php?exito=1");
  }else{
    header("Location: singup.php?error=1");
  }




 ?>
