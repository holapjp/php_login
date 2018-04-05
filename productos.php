<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/fontawesome-all.min.js" charset="utf-8"></script>
    <title>Productos</title>
  </head>
  <body>
    <div>
      <?php require_once "partial/navbar.php" ?>
    </div>
    <div class="jumbotron" align="center" style="background: #5dade2 ; color:white;">
      <h1><b>Productos</b></h1>
    </div>
    <div class=".main-container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          <div class="container-fluid">
          <table class="table table-bordered">
            <thead>
              <th>ID</th>
              <th>NOMBRE</th>
              <th>PRECIO</th>
              <th>CANTIDAD</th>
              <th>OPCIONES</th>
            </thead>
            <tbody>
              <?php
                require_once "conexion.php";
                $e = new Conexion();
                $datos = $e->getProducts();
                foreach($datos as $d){?>
                  <tr>
                    <td> <?= $d['id'] ?> </td>
                    <td> <?= $d['nombre'] ?> </td>
                    <td> <?= $d['precio'] ?> </td>
                    <td> <?= $d['cantidad']?> </td>
                    <td>
                      <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                      <a href="#" class="btn btn-warning" style="color:white;"><i class="fas fa-edit"></i></a>
                      <a href="#" class="btn btn-danger"> <i class="far fa-trash-alt"></i> </a>
                    </td>
                  </tr>
                <?php }
               ?>
            </tbody>
          </table>
          </div>
        <div class="container">
          <a href="newproduct.php" class="btn btn-outline-info">Nuevo</a>
        </div>
      </div>
      <div class="col">
        <div class="jumbotron" style="margin:20px">
          <div class="container">
            <h1 align="center"><b>Productos en oferta<b></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div style="overflow:auto;">
      <?php require_once "partial/footer.php" ?>
    </div>
    <script src="assets/js/jquery.min.js" charset="utf-8"></script>
    <script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
  </body>
</html>
