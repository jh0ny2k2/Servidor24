<?php

    namespace RegalosNavidad\vistas;

    class VistaEnlace{

        public static function render($enlace, $id) {

            include "cabeceraPrincipal.php";
           
            echo '  <div class="container">';
            echo '  <hr>';
            echo '  <a href="index.php?accion=añadirEnlace&id=' . $id . '"><button class="btn btn-danger mt-5 mb-3">Añadir Enlace</button></a>';
            echo '  <h1>LISTA DE ENLACES</h1>';
            echo '  <table class="table mt-5 text-center">';
            echo '      <thead>';
            echo '          <tr>
                                <th class="col text-center">Tienda</th>
                                <th class="col text-center">Link</th>
                                <th class="col text-center"><a class="text-dark text-decoration-none" href="index.php?accion=mostrarTodosAnio">Precio<i class="zmdi zmdi-caret-down"></th>
                                <th class="col text-center">Opciones</th>
                            </tr>';
            echo '      </thead>';
            echo '      <tbody>';
            if (isset($enlace)) {
                foreach ($enlace as $valor){
                    echo '          <tr>';
                    echo '              <td>' . $valor -> getTienda() . '</td>';
                    echo '              <td><a class="text-dark text-decoration-none" href="' . $valor -> getLinks() . '">' . $valor -> getLinks() . '</a></td>';
                    echo '              <td>' . $valor -> getPrecio() . '</td>';
                    echo '              <td><a href="index.php?accion=eliminarEnlace&id=' . $valor -> getId() . '"><button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button></a></td>';
                    echo '          </tr>';
                }
            }
            echo '      </tbody>';
            echo '  </table>';
            echo '  <a href="index.php?accion=mostrarLogIn"><button type="submit" class="btn btn-danger mt-3"><- Volver Atrás</button></a>';
            echo '</div>';
            
        }

    }


?>