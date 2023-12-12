<?php 

    namespace Examen\vistas;

    class VistaLogIn {

        public static function render() {

            // INCLUIMOS LA CABECERA 
            include "CabeceraPrincipal.php";

            echo ' <div class="container">';
            echo '  <div class="position-absolute top-50 start-50 translate-middle">';
            
            echo '  <h1>Login</h1>';
            echo '  <form action="index.php" method="POST">';
            echo '      <div class="mb-3 row">';
            echo '          <label for="email" class="col-sm-2 col-form-label">Email</label>';
            echo '          <div class="ms-5 col-sm-7">';
            echo '              <input type="email" class="form-control" id="email" name="email" required>';
            echo '          </div>';
            echo '      </div>';
            echo '      <div class="mb-3 row">';
            echo '          <label for="password" class="col-sm-2 col-form-label">Contraseña</label>';
            echo '          <div class="ms-5 col-sm-7">';
            echo '              <input type="password" class="form-control" id="password" name="password" required>';
            echo '          </div>';
            echo '      </div>';
            echo '      <button type="submit" name="accion" value="realizarLogIn" class="btn btn-primary">Iniciar Sesion</button>';
            echo '  </form>';

            echo '  </div>';
            echo ' </div>';


        }

    }

?>