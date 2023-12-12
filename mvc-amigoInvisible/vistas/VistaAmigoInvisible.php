<?php

    namespace AmigoInvisible\vistas;


    class VistaAmigoInvisible {

        public static function render($amigos, $participantes) {
            
            include "cabeceraPrincipal.php";

            echo '  <div class="container">';
            echo '  <hr>';
            echo '  <a href="index.php?accion=mostrarTodos"><button type="button" class="btn btn-primary btn-lg px-4 gap-3"><-- Volver Atrás</button></a>';
            echo '  <h1>AMIGO INVISIBLE</h1>';
            echo '  <br>';
            echo '  <h3>Datos de partida</h3>';
            echo '  <table class="table mt-5">';
            echo '      <thead>';
            echo '          <tr>
                                <th class="col text-center">Nombre</th>
                                <th class="col text-center">Estado</th>
                                <th class="col text-center">Maximo Dinero</th>
                                <th class="col text-center">Fecha Tope</th>
                                <th class="col text-center">Lugar</th>
                                <th class="col text-center">Observaciones</th>
                            </tr>';
            echo '      </thead>';
            echo '      <tbody>';

            if (isset($amigos)) {
                    echo '          <tr class="text-center">';
                    echo '              <td>' . $amigos->getNombre() . '</td>';
                    echo '              <td>' . $amigos->getEstado() . '</td>';
                    echo '              <td>' . $amigos->getMaximoDinero() . '</td>';
                    echo '              <td>' . $amigos->getFechaTope() . '</td>';
                    echo '              <td>' . $amigos->getLugar() . '</td>';
                    echo '              <td>' . $amigos->getObservaciones() . '</td>';   
                    echo '          </tr>';
            }
            echo '      </tbody>';
            echo '  </table>';
            echo '  <h3>Participantes</h3>';
            echo '  <a href="index.php?accion=buscarParticipante&idAmigoInvisible='. $amigos->getId() .'"><button class="btn btn-primary mt-2 mb-3">Añadir Participante</button></a>';
            echo '  <table class="table mt-5">';
            echo '      <thead>';
            echo '          <tr>
                                <th class="col text-center">Email</th>
                                <th class="col text-center">Nombre</th>
                                <th class="col text-center">Teléfono</th>
                                <th class="col text-center">Opciones</th>
                            </tr>';
            echo '      </thead>';
            echo '      <tbody>';
            if (isset($participantes)) {
                foreach ($participantes as $participante){
                    echo '          <tr class="text-center">';
                    echo '              <td>' . $participante->getEmail() . '</td>';
                    echo '              <td>' . $participante->getNombre() . '</td>';
                    echo '              <td>' . $participante->getTelefono() . '</td>'; 
                    echo '              <td><a href="index.php?accion=eliminarParticipante&id='. $participante -> getId() .'&idAmigoInvisible='. $amigos->getId() .'"><button class="btn btn-danger">X</button></a>
                    <a href="index.php?accion=verModificarParticipante&id='. $participante -> getId() .'&idAmigoInvisible='. $amigos->getId() .'"><button class="btn btn-warning">@</button></a></td>'; 
                    echo '          </tr>';
                }
            }
            echo '      </tbody>';
            echo '  </table>';
            echo '</div>';


        }
    }

?>

