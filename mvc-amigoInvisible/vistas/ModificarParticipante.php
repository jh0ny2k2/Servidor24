<?php

    namespace AmigoInvisible\vistas;

    class ModificarParticipante {

        public static function render($amigos) {
            
            include "cabeceraPrincipal.php";

            foreach($amigos as $valor) {

?>

            <div>
                    <label for="email">EMAIL:</label><br>
                    <input class="col-6 mt-3" type="text" name="email" value="<?= $valor->getEmail() ?>" id="email" required />
                </div>
                <br/>
                <div>
                    <label for="nombre">NOMBRE:</label><br>
                    <input class="col-6 mt-3" type="text" name="nombre" id="nombre" value="<?= $valor->getNombre() ?>">
                </div>
                <br>
                <div>
                    <label for="telefono">TELEFONO:</label><br>
                    <input class="col-6 mt-3" type="number" name="telefono" value="<?= $valor->getTelefono() ?>" id="telefono" required />
                </div>
                <br/>
                <div class="col-6 text-end mt-3">
                    <button type="reset" class="btn btn-primary">Resetear Formularios</button>
                    <button type="submit" class="btn btn-primary" name="accion" value="enviarModificarParticipante">Enviar</button>
                </div> 
<?php
            }

        }
    }

?>

