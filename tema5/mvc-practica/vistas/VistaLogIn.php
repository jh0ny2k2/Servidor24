<?php
    // CREAMOS EL NAMESPACE
    namespace RegalosNavidad\vistas;

    class VistaLogIn {

        public static function render() {

            // INCLUIMOS LA CABECERA 
            include "CabeceraPrincipal.php";

            echo ' <div class="container">';
            echo '  <div class="position-absolute top-50 start-50 translate-middle">';
            
            echo '  <h1>Login</h1>';
            echo '  <form action="index.php" method="POST">';
            echo '      <div class="mb-3 row">';
            echo '          <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>';
            echo '          <div class="ms-5 col-sm-7">';
            echo '              <input type="text" class="form-control" id="nombre" name="nombre" required>';
            echo '          </div>';
            echo '      </div>';
            echo '      <div class="mb-3 row">';
            echo '          <label for="password" class="col-sm-2 col-form-label">Contraseña</label>';
            echo '          <div class="ms-5 col-sm-7">';
            echo '              <input type="password" class="form-control" id="password" name="password" required>';
            echo '          </div>';
            echo '      </div>';
            echo '      <button type="submit" name="inicioSesion" value="recibirFormularioInicioSesion" class="btn btn-danger">Iniciar Sesion</button>';
            echo '  </form>';

            echo '  </div>';
            echo ' </div>';


        }

        
    }
    
?>