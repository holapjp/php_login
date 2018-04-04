<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/fontawesome-all.min.js" charset="utf-8"></script>
    <title>Login</title>
    <style media="screen">
      .form-control{
        width:60%;
      }
    </style>
  </head>
  <body>
    <div>
      <?php require_once 'partial/navbar.php' ?>
    </div>
    <div class="jumbotron" align="center" style="background: #5dade2 ; color:white;">
      <h1><b>Login</b></h1>
        or <a href="singup.php" class="btn btn-outline-light">SingUp<i class="far fa-share-square"></i></a>
    </div>
    <div>
      <?php if(!empty($_GET['error'])){
        echo "<div class='alert alert-danger' align='center' style='margin:0px;'>Lo siento, Email o Contraseña incorrectas. Vuelve a intentar</div>";
      } ?>
    </div>
    <div class="container" align="center">
      <form action="ingresar.php" method="post">
        <div class="row">
          <div class="col">
            <div class="form-group" align="center">
              <label for="usuario"><b>Email</b></label>
              <input type="email" name="usuario" required class="form-control" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <label for="password"> <b>Password</b> </label>
              <input type="password" name="password1" required class="form-control" placeholder="Enter your password">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <button type="submit" class="btn btn-outline-info">Send</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <script src="assets/js/jquery.min.js" charset="utf-8"></script>
    <script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
  </body>
</html>

<style media="screen">
  p{
    WI
  }
</style>
