<?php

    namespace RegalosNavidad\vistas;

    class VistaResultados {

        public static function render() {
            
            include "cabeceraPrincipal.php";

            echo '  <div class="container">';
            echo '  <button class="btn btn-danger mt-5 mb-3">Añadir regalo</button>';
            echo '  <h1>LISTA DE REGALOS</h1>';
            echo '  <table class="table mt-5">';
            echo '      <thead>';
            echo '          <tr>
                                <th class="col col-lg-2 text-center">Nombre</th>
                                <th class="col col-lg-2 text-center">Destinatario</th>
                                <th class="col col-lg-2 text-center">Precio</th>
                                <th class="col col-lg-2 text-center">Estado</th>
                                <th class="col col-lg-2 text-center">Año</th>
                                <th class="col col-lg-2 text-center">Enlaces</th>
                            </tr>';
            echo '      </thead>';
            echo '      <tbody>';

            
            foreach ($regalos as $regalo){
                echo '          <td></td>';
            }

            echo '      </tbody>';
            echo '  </table>';
            echo '</div>';

            





            // include "piePrincipal.php";

        }
    }

?>