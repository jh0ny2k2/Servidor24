<?php

    namespace RegalosNavidad\vistas;

    class VistaVisualizarRegalo{

        public static function render($resultado) {

            include "cabeceraPrincipal.php";

            foreach ($resultado as $valor){

?>
            <div class="container">
                <h1>VISUALIZAR PRODUCTO</h1>
                <hr>

                <h4>Nombre: <span class="text-danger ms-3"><?= $valor->getNombre() ?></span></h4>
                <br>
                <h4>Destinatario: <span class="text-danger ms-3"><?= $valor->getDestinatario() ?></span></h4>
                <br>
                <h4>Precio: <span class="text-danger ms-3"><?= $valor->getPrecio() ?></span></h4>
                <br>
                <h4>Estado: <span class="text-danger ms-3"><?= $valor->getEstado() ?></span></h4>
                <br>
                <h4>Fecha: <span class="text-danger ms-3"><?= $valor->getAnio() ?></span></h4>
                <a href="index.php?accion=mostrarLogIn"><button type="submit" class="btn btn-danger mt-3"><- Volver Atrás</button></a>
                
            

<?php

            }
            


            // include "PiePrincipal.php";
        }

    }


?>