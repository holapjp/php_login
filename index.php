<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/fontawesome-all.min.js" charset="utf-8"></script>
    <title>Welcome your Application</title>
    <style media="screen">
      .icon{
        font-size:20px;
      }
    </style>
  </head>
  <body>
    <div>
      <?php require_once 'partial/navbar.php'; ?>
      <?php
        if(!empty($_GET['exito'])){
          echo "<div class='alert alert-success' align='center' style='margin:0px;'>Usuario creado exitosamente</div>";
        }else if(!empty($_GET['error'])){
          echo "<div class='alert alert-danger' align='center' style='margin:0px;'>Lo siento, tu usuario no se ha podido crear. Vuelve a intentar</div>";
        }
      ?>
    </div>
    <?php if(!empty($_SESSION['user_name'])): ?>
      <div class="jumbotron" align="center" style="background:#5dade2; color:white;">
        <h1><b>Welcome <?= $_SESSION['user_name'] ?><i class="far fa-hand-peace"></i></b></h1>
        <a class="icon btn btn-outline-light" href="logout.php">Logout <i class="fas fa-sign-out-alt"></i></a>
      </div>
    <?php else: ?>
    <div class="jumbotron" align="center" style="background:#5dade2; color:white;">
      <h1><b>Welcome your application <i class="far fa-hand-peace"></i></b></h1>
      <a class="icon btn btn-outline-light" href="login.php">Login<i class="fas fa-sign-in-alt"></i></a> Or <a class="icon btn btn-outline-light"href="singup.php">SingUp <i class="far fa-share-square"></i></a>
    </div>
  <?php endif; ?>
    <script src="assets/js/jquery.min.js" charset="utf-8"></script>
    <script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
  </body>
</html>
