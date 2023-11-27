<?php

    namespace RegalosNavidad\vistas;

    class VistaResultados {

        public static function render($regalos) {
            
            include "cabeceraPrincipal.php";

            echo '  <div class="container">';
            echo '  <hr>';
            echo '  <a href="index.php?accion=añadirRegalo"><button class="btn btn-danger mt-2 mb-3">Añadir regalo</button></a>';
            echo '  <h1>LISTA DE REGALOS</h1>';
            echo '  <table class="table mt-5">';
            echo '      <thead>';
            echo '          <tr>
                                <th class="col text-center">Nombre</th>
                                <th class="col text-center">Destinatario</th>
                                <th class="col text-center">Precio</th>
                                <th class="col text-center">Estado</th>
                                <th class="col text-center"><a class="text-dark text-decoration-none" href="index.php?accion=mostrarTodosAnio">Año <i class="zmdi zmdi-caret-down"></i></a></th>
                                <th class="col text-center">Enlaces</th>
                                <th class="col text-center">Opciones</th>
                            </tr>';
            echo '      </thead>';
            echo '      <tbody>';

            if (isset($regalos)) {
                foreach ($regalos as $regalo){
                    echo '          <tr class="text-center">';
                    echo '              <td>' . $regalo->getNombre() . '</td>';
                    echo '              <td>' . $regalo->getDestinatario() . '</td>';
                    echo '              <td>' . $regalo->getPrecio() . '</td>';
                    echo '              <td>' . $regalo->getEstado() . '</td>';
                    echo '              <td>' . $regalo->getanio() . '</td>';
                    echo '              <td><a href="index.php?accion=verEnlaces&id='. $regalo -> getId() .'"><button class="btn btn-danger"><i class="zmdi zmdi-link"></button></a></td>';
                    echo '              <td>
                    <a href="index.php?accion=visualizarRegalo&id='. $regalo -> getId() .'"><button class="btn btn-danger"><i class="zmdi zmdi-search"></i></button></a>
                    <a href="index.php?accion=modificarRegalo&id='. $regalo -> getId() .'"><button class="btn btn-danger"><i class="zmdi zmdi-edit"></button></a>
                    <a href="index.php?accion=eliminarRegalo&id='. $regalo -> getId() .'"><button class="btn btn-danger"><i class="zmdi zmdi-delete"></button></a></td>';
                    echo '          </tr>';
                }
            }

            echo '      </tbody>';
            echo '  </table>';
            echo '</div>';

             include "piePrincipal.php";

        }
    }

?>

