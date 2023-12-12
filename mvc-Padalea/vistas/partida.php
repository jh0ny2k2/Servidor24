<?php

    namespace Padalea\vistas;

    class Partida {

        public static function render($partida, $regalos) {
            
            include "cabeceraPrincipal.php";

            echo '  <div class="container">';
            echo '  <hr>';
            echo '  <h1>Partida</h1>';
            echo '  <h4>Información de la partida</h4>';

            if (isset($partida)) {
                foreach ($partida as $partidas){
                    echo '  <p>Fecha: ' . $partidas->getFecha() . '</p>';
                    echo '  <p>Hora: ' . $partidas->getHora() . '</p>';
                    echo '  <p>Ciudad: ' . $partidas->getCiudad() . '</p>';
                    echo '  <p>Lugar: ' . $partidas->getLugar() . '</p>';
                    echo '  <p>Cubierto: ' . $partidas->getCubierto() . '</p>';
                    echo '  <p>Estado: ' . $partidas-> getEstado() . '</p>';
                }
            }

            echo '  <h3> Lista de jugadores</h3>';
            echo '  <table class="table mt-5">';
            echo '      <thead>';
            echo '          <tr>
                                <th class="col text-center">Nombre</th>
                                <th class="col text-center">Nivel</th>
                                <th class="col text-center">Apodo</th>
                                <th class="col text-center">Edad</th>
                            </tr>';
            echo '      </thead>';
            echo '      <tbody>';

            if (isset($regalos)) {
                foreach ($regalos as $regalo){
                    echo '          <tr class="text-center">';
                    echo '              <td>' . $regalo->getNombre() . '</td>';
                    echo '              <td>' . $regalo->getNivel() . '</td>';
                    echo '              <td>' . $regalo->getApodo() . '</td>';
                    echo '              <td>' . $regalo->getEdad() . '</td>'; 
                    echo '          </tr>';
                }
            }
            echo '      </tbody>';
            echo '  </table>';
            echo '  </div>';
        }
    }

?>