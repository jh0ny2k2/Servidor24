<?php

    namespace RegalosNavidad\vistas;

    class VistaEnlace{

        public static function render($enlace) {

            include "cabeceraPrincipal.php";

            echo '  <div class="container">';
            echo '  <a href="index.php?accion=añadirRegalo"><button class="btn btn-danger mt-5 mb-3">Añadir Enlace</button></a>';
            echo '  <h1>LISTA DE ENLACES</h1>';
            echo '  <table class="table mt-5">';
            echo '      <thead>';
            echo '          <tr>
                                <th class="col text-center">Tienda</th>
                                <th class="col text-center">Link</th>
                                <th class="col text-center">Precio</th>
                                <th class="col text-center">Opciones</th>
                            </tr>';
            echo '      </thead>';
            echo '      <tbody>';
            
            foreach ($enlace as $valor) {
            echo '          <tr>';
            echo '              <td>' . $valor -> getTienda . '</td>';
            echo '              <td>' . $valor -> getLinks . '</td>';
            echo '              <td>' . $valor -> getPrecio . '</td>';
            echo '              <td>' . $valor -> getTienda . '</td>';
            echo '          </tr>';
            }
            echo '      </tbody>';
            echo '  </table>';
            echo '</div>';
            
        }

    }


?>