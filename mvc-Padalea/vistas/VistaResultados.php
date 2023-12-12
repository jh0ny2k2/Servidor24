<?php

    namespace Padalea\vistas;

    class VistaResultados {

        public static function render($regalos) {
            
            include "cabeceraPrincipal.php";

            echo '  <div class="container">';
            echo '  <hr>';
            echo '  <a href="index.php?accion=añadirPartida"><button class="btn btn-primary mt-2 mb-3">Añadir regalo</button></a>';
            echo '  <h1>LISTA DE PARTIDAS DISPONIBLES</h1>';
            echo '  <table class="table mt-5">';
            echo '      <thead>';
            echo '          <tr>
                                <th class="col text-center">Fecha</th>
                                <th class="col text-center">Hora</th>
                                <th class="col text-center">Lugar</th>
                                <th class="col text-center">Cubierto</th>
                                <th class="col text-center">Estado</th>
                                <th class="col text-center">Opciones</th>
                            </tr>';
            echo '      </thead>';
            echo '      <tbody>';

            if (isset($regalos)) {
                foreach ($regalos as $regalo){
                    echo '          <tr class="text-center">';
                    echo '              <td>' . $regalo->getFecha() . '</td>';
                    echo '              <td>' . $regalo->getHora() . '</td>';
                    echo '              <td>' . $regalo->getLugar() . '</td>';
                    echo '              <td>' . $regalo->getCubierto() . '</td>';
                    echo '              <td>' . $regalo->getEstado() . '</td>';
                    if ($regalo -> getEstado() !== 'finalizado' && $regalo -> getEstado() !== 'iniciado') {
                    echo '              <td><a href="index.php?accion=entrarPartida&id='. $regalo -> getId() .'"><button class="btn btn-primary">Entrar a la partida</button></a>';
                    } 
                    echo '          </tr>';
                }
            }

            echo '      </tbody>';
            echo '  </table>';
            echo '</div>';


        }
    }

?>

