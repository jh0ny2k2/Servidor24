<?php

    namespace RegalosNavidad\vistas;
    

    class VistaAñadirEnlace{

        public static function render($id) {

            include "cabeceraPrincipal.php";
?>

            <div class="container">
            <hr>
            <h2 class="text-danger mt-5 mb-4">AÑADIR ENLACE</h2>
            <form action="index.php" method="post" class="mt-2">
                    <div>
                        <label for="tienda">Tienda:</label><br>
                        <input class="col-6 mt-3" type="text" name="tienda" id="tienda" required />
                    </div>
                    <br>
                    <div>
                        <label for="precio">Precio:</label><br>
                        <input class="col-6 mt-3" type="text" name="precio" id="precio" required />
                    </div>
                    <div>
                        <label for="link">Link:</label><br>
                        <input class="col-6 mt-3" type="text" name="link" id="link" required />
                    </div>
                    <?php
                    echo '<input type="hidden" name="id" value=" ' . $id . ' ">';
                    ?>
                    <br/>
                    <div class="col-6 text-end mt-3">
                        <button type="reset" class="btn btn-danger">Resetear Formularios</button>
                        <button type="submit" class="btn btn-danger" name="accion" value="enviarAñadirEnlace">Añadir Enlace</button>
                    </div>
                </form>
            </div>
<?php

        }
    
    }
    

?>