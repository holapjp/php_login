<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/fontawesome-all.min.js" charset="utf-8"></script>
    <title>SingUp</title>
  </head>
  <body>
    <div>
      <?php require_once 'partial/navbar.php'; ?>
    </div>
    <div class="jumbotron" align="center" style="padding:20px; padding-bottom:30px; background: #5dade2 ; color:white;">
      <h1 style="padding:0px; padding-bottom:10px;"><b> SingUp </b></h1>
      <p>Or <a class="btn btn-outline-light" href="login.php">Login <i class="fas fa-sign-in-alt"></i></a> </p>
    </div>
    <div>
        <?php
        if(!empty($_GET['exito'])){
          echo "<div class='alert alert-success' style='margin-top:0px; margin-bottom:30px;' align='center';>Usuario creado exitosamente</div>";
        }else if(!empty($_GET['error'])){
          echo "<div class='alert alert-danger' align='center' style='margin-top:0px; margin-bottom:30px;'>Lo siento, tu usuario no se ha podido crear. Vuelve a intentar</div>";
        }
         ?>
    </div>
    <div class="container-fluid">
      <form action="crearusuario.php" method="post">
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="nombre"><b>Nombre</b></label>
              <input class="form-control" type="text" name="nombre" placeholder="Enter your Name" required>
            </div>
            <div class="form-group">
              <label for="correo"> <b>Email</b> </label>
              <input type="email" name="correo" required class="form-control" placeholder="Enter you email">
            </div>
            <div class="form-group">
              <label for="password"> <b>Contraseña</b> </label>
              <input type="password" name="password" required class="form-control" placeholder="Enter your password">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="apellido"> <b>Apellido</b> </label>
              <input type="text" name="apellido" placeholder="Enter your lastname" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="telefono"><b>Telefono</b> </label>
              <input type="text" name="telefono" placeholder="Enter your phone" required class="form-control">
            </div>
            <div class="form-group">
              <label for="confirm"><b>Confirmar contraseña</b> </label>
              <input type="password" name="confirm" class="form-control" required placeholder="Confirm the password">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="container" align="center">
              <div class="form-group">
                <button type="submit" class="btn btn-outline-info btn-lg">Send</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <script src="assets/js/jquery.min.js" charset="utf-8"></script>
    <script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
  </body>
</html>
