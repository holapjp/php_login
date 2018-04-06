<?php
  $producto = "";
  require_once 'conexion.php';
  if(!empty($_GET['id'])){
    $s = new Conexion();
    $producto = $s->getProductsById($_GET['id']);
  }
 ?>
