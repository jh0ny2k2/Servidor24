<?php

    namespace AmigoInvisible\vistas;

    class VistaResultadosParticipantes {

        public static function render($clientes , $id) {
            
            include "cabeceraPrincipal.php";

            echo '  <div class="container">';
            echo '  <h1>LISTA DE PARTICIPANTES</h1>';
            echo '  <table class="table mt-5">';
            echo '      <thead>';
            echo '          <tr>
                                <th class="col text-center">Email</th>
                                <th class="col text-center">Nombre</th>
                                <th class="col text-center">Teléfono</th>
                                <th class="col text-center">Añadir</th>
                            </tr>';
            echo '      </thead>';
            echo '      <tbody>';

            if (isset($clientes)) {
                foreach ($clientes as $incidencia){
                    echo '          <tr class="text-center">';
                    echo '              <td>' . $incidencia->getEmail() . '</td>';
                    echo '              <td>' . $incidencia->getNombre() . '</td>';
                    echo '              <td>' . $incidencia->getTelefono() . '</td>';
                    echo '              <td>
                    <a href="index.php?accion=añadirParticipanteAmigoInvisible&id=' . $incidencia -> getId() .'&idPartida=' . $id . '"><button class="btn btn-primary">+</i></button></a></td>';
                    echo '          </tr>';
                }
            }
            echo '      </tbody>';
            echo '  </table>';
            echo '</div>';
        }
    }

?>

