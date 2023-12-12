<?php

    namespace AmigoInvisible\vistas;

    class ModificarParticipante {

        public static function render($amigos) {
            
            include "cabeceraPrincipal.php";

?>

            <div>
                    <label for="nombre">EMAIL:</label><br>
                    <input class="col-6 mt-3" type="text" name="nombre" id="nombre" required />
                </div>
                <br/>
                <div>
                    <label for="estado">NOMBRE:</label><br>
                    <select class="form col-6 text-center mt-3" name="estado" id="estado">
                        <option value="activo" selected>ACTIVO</option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="maximo">TELEFONO:</label><br>
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
<?php


        }
    }

?>

