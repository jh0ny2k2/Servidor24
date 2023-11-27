<?php

    namespace RegalosNavidad\vistas;
    use RegalosNavidad\modelos\Usuario;

    class VistaAñadirRegalo {

        public static function render() {

            // INCLUIMOS LA CABECERA 
            include "CabeceraPrincipal.php";

?>
        <div class="container">
        <hr>
        <h2 class="text-danger mt-5 mb-4">AÑADIR REGALO</h2>
        <form action="index.php" method="post" class="mt-2">
        
                <div>
                    <label for="nombre">Nombre:</label><br>
                    <input class="col-6 mt-3" type="text" name="nombre" id="nombre" required />
                </div>
                <br/>
                <div>
                    <label for="destinatario">Destinatario:</label><br>
                    <input class="col-6 mt-3" type="text" name="destinatario" id="destinatario" required />
                </div>
                <br/>
                <div>
                    <label for="precio">Precio:</label><br>
                    <input class="col-6 mt-3" type="number" name="precio" id="precio" required />
                </div>
                <br/>
                <div>
                    <label for="estado">Estado:</label><br>
                    <select class="form col-6 text-center mt-3" name="estado" id="estado" aria-label="Default select example">
                        <option selected>Sin opción</option>
                        <option value="Comprado">Comprado</option>
                        <option value="pendiente">Pendiente</option>
                    </select>
                </div>
                <br/>
                <div>
                    <label for="anio">Año:</label><br>
                    <input class="col-6 mt-3 text-center" type="date" name="anio" id="anio" required />
                </div>
                <?php
                
                $usuario = unserialize($_SESSION['usuario']);
                echo '<input type="hidden" name="id" value=" ' . $usuario -> getId() . ' ">';
                
                ?>
                <div class="col-6 text-end mt-3">
                    <button type="reset" class="btn btn-danger">Resetear Formularios</button>
                    <button type="submit" class="btn btn-danger" name="accion" value="enviarAñadirRegalo">Enviar</button>
                </div>
                
            </form>
        </div>
<?php

        }

    }



?>