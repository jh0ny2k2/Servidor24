<?php

    namespace Padalea\vistas;

    class VistaAñadirPartida {

        public static function render() {

            // INCLUIMOS LA CABECERA 
            include "CabeceraPrincipal.php";

?>
        <div class="container">
        <hr>
        <h2 class="text-primary mt-5 mb-4">AÑADIR PARTIDA</h2>
        <form action="index.php" method="post" class="mt-2">
                <div>
                    <label for="fecha">FECHA:</label><br>
                    <input class="col-6 mt-3" type="date" name="fecha" id="fecha" required />
                </div>
                <br/>
                <div>
                    <label for="hora">HORA:</label><br>
                    <input class="col-6 mt-3" type="time" name="hora" id="hora" required />
                </div>
                <br/>
                <div>
                    <label for="ciudad">CIUDAD:</label><br>
                    <input class="col-6 mt-3" type="text" name="ciudad" id="ciudad" required />
                </div>
                <br>
                <div>
                    <label for="lugar">LUGAR:</label><br>
                    <input class="col-6 mt-3" type="text" name="lugar" id="lugar" required />
                </div>
                <br/>
                <div>
                    <label for="cubierto">CUBIERTO:</label><br>
                    <select class="form col-6 text-center mt-3" name="cubierto" id="cubierto">
                        <option value="cubierto" selected>Cubierto</option>
                        <option value="noCubierto">No cubierto</option>
                    </select>
                </div>
                <br/>
                <div>
                    <label for="estado">ESTADO:</label><br>
                    <select class="form col-6 text-center mt-3" name="estado" id="estado">
                        <option value="sinEmpezar" selected>Sin Empezar</option>
                        <option value="iniciado">Iniciado</option>
                        <option value="finalizado">Finalizado</option>
                    </select>
                </div>
                <br/>
                <div class="col-6 text-end mt-3">
                    <button type="reset" class="btn btn-primary">Resetear Formularios</button>
                    <button type="submit" class="btn btn-primary" name="accion" value="enviarAñadirPartida">Enviar</button>
                </div> 
            </form>
        </div>
<?php
        }
    }
?>