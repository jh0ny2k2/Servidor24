<?php

    namespace AmigoInvisible\vistas;

    class VistaAñadirAmigoInvisible {

        public static function render() {

            // INCLUIMOS LA CABECERA 
            include "CabeceraPrincipal.php";

?>
        <div class="container">
        <hr>
        <h2 class="text-primary mt-5 mb-4">AÑADIR AMIGO INVISIBLE</h2>
        <form action="index.php" method="post" class="mt-2">
                <div>
                    <label for="nombre">NOMBRE:</label><br>
                    <input class="col-6 mt-3" type="text" name="nombre" id="nombre" required />
                </div>
                <br/>
                <div>
                    <label for="estado">ESTADO:</label><br>
                    <select class="form col-6 text-center mt-3" name="estado" id="estado">
                        <option value="activo" selected>ACTIVO</option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="maximo">MAXIMO DINERO:</label><br>
                    <input class="col-6 mt-3" type="number" name="maximo" id="maximo" required />
                </div>
                <br/>
                <div>
                    <label for="fecha">FECHA:</label><br>
                    <input class="col-6 mt-3" type="date" name="fecha" id="fecha" required />
                </div>
                <br>
                <div>
                    <label for="lugar">LUGAR:</label><br>
                    <input class="col-6 mt-3" type="text" name="lugar" id="lugar" required />
                </div>
                <br/>
                <div>
                    <label for="observaciones">OBSERVACIONES:</label><br>
                    <input class="col-6 mt-3" type="text" name="observaciones" id="observaciones" required />
                </div>
                <input type="hidden" name="emoji" value="1">
                <br/>
                <div class="col-6 text-end mt-3">
                    <button type="reset" class="btn btn-primary">Resetear Formularios</button>
                    <button type="submit" class="btn btn-primary" name="accion" value="enviarAñadirAmigoInvisible">Enviar</button>
                </div> 
            </form>
        </div>
<?php
        }
    }
?>