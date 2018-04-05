<?php

  require_once "conexion.php";

   if(!empty($_POST)){
     $n = new Conexion();
     $nombre =  $_POST['nombre'];
     $precio = $_POST['precio'];
     $cantidad = $_POST['cantidad'];

     if($n->createProduct($nombre,$precio,$cantidad)){
       header("Location: productos.php?exito=3");
     }else{
       header("Location: newproduct.php?error=3");
     }
   }

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <script src="assets/js/fontawesome-all.min.js" charset="utf-8"></script>
     <title>Producto</title>
   </head>
   <body>
     <div>
       <?php require_once 'partial/navbar.php' ?>
     </div>
     <div class="jumbotron" align="center" style="background: #5dade2 ; color:white;">
       <h1><b>Nuevo Producto</b></h1>
     </div>
    <div class="container">
      <form action="newproduct.php" method="post">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 co-12">
            <div class="form-group" align="center">
              <label for="nombre"> <b>Nombre</b> </label>
              <input type="text" name="nombre" required  class="form-control" placeholder="Enter a name" style="width:65%; padding:10px;">
            </div>
            <div class="form-group" align="center">
              <label for="precio"> <b>Precio</b> </label>
              <input type="number" name="precio" class="form-control" required placeholder="0" style="width:65%; padding:10px;">
            </div>
            <div class="form-group" align="center">
              <label for="cantidad"> <b>Cantidad</b> </label>
              <input type="number" name="cantidad" class="form-control" required placeholder="0" style="width:65%; padding:10px;" >
            </div>
            <div class="form-group" align="center">
              <div class="container">
                <button type="submit" class="btn btn-outline-info">Registrar</button>
                <a href="productos.php" class="btn btn-outline-secondary">Atras</a>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
     <div>
       <?php require_once 'partial/footer.php' ?>
     </div>
     <script src="assets/js/jquery.min.js" charset="utf-8"></script>
     <script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
   </body>
 </html>
