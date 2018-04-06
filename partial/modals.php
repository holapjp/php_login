<!--Ventana modal-->
<?php
  require_once 'conexion.php';
  $show = new Conexion();
  $datos = $show->getProductsById($_GET['id']);

?>
<div class="modal" id="ver">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title">Producto</h2>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times</button>
      </div>
      <!-- Contenido -->
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <!-- footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-info">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin de la ventana modal !-->
