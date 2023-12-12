<?php

    namespace AmigoInvisible\vistas;

    use \DateTime;

    class VistaResultados {

        public static function render($amigos) {
            
            include "cabeceraPrincipal.php";

            echo '  <div class="container">';
            echo '  <hr>';
            echo '  <a href="index.php?accion=añadirAmigoInvisible"><button class="btn btn-primary mt-2 mb-3">Añadir Amigo Invisible</button></a>';
            echo '  <h1>LISTA DE GRUPOS DISPONIBLES</h1>';
            echo '  <table class="table mt-5">';
            echo '      <thead>';
            echo '          <tr>
                                <th class="col text-center">Nombre</th>
                                <th class="col text-center">Estado</th>
                                <th class="col text-center">Maximo Dinero</th>
                                <th class="col text-center">Fecha Tope</th>
                                <th class="col text-center">Lugar</th>
                                <th class="col text-center">Observaciones</th>
                                <th class="col text-center">Opciones</th>
                            </tr>';
            echo '      </thead>';
            echo '      <tbody>';

            if (isset($amigos)) {
                foreach ($amigos as $amigo){
                    echo '          <tr class="text-center">';
                    echo '              <td>' . $amigo->getNombre() . '</td>';
                    echo '              <td>' . $amigo->getEstado() . '</td>';
                    echo '              <td>' . $amigo->getMaximoDinero() . '</td>';
                    echo '              <td>' . $amigo->getFechaTope() . '</td>';
                    echo '              <td>' . $amigo->getLugar() . '</td>';
                    echo '              <td>' . $amigo->getObservaciones() . '</td>';   
                    echo '              <td><a href="index.php?accion=eliminarAmigoInvisible&id='. $amigo -> getId() .'"><button class="btn btn-danger">X</button></a>
                    <a href="index.php?accion=buscarInfoAmigoInvisible&id='. $amigo -> getId() .'"><button class="btn btn-warning">@</button></a>
                    <a href="index.php?accion=mostrarAmigoInvisible&id='. $amigo -> getId() .'"><button class="btn btn-primary">Mostrar Informacion</button></a>';
                    echo '          </tr>';
                }
            }

            echo '      </tbody>';
            echo '  </table>';
            echo '</div>';


        }
    }

?>

