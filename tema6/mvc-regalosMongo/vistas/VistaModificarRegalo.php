<?php

    namespace RegalosNavidad\vistas;

    class VistaModificarRegalo{

        public static function render($resultado, $id) {

           // INCLUIMOS LA CABECERA 
           include "CabeceraPrincipal.php";

           foreach($resultado as $valor) {


?>
                   <div class="container">
                   <hr>
                   <a href="index.php?accion=mostrarLogIn"><button type="submit" class="btn btn-danger mt-2"><- Volver Atrás</button></a>
                   <h2 class="text-danger mt-3 mb-4">MODIFICAR REGALO</h2>
                   <form action="index.php" method="post" class="mt-2">
                   
                           <div>
                               <label for="nombre">Nombre:</label><br>
                               <input class="col-6 mt-3" type="text" name="nombre" id="nombre" value="<?= $valor->getNombre() ?>" required />
                           </div>
                           <br/>
                           <div>
                               <label for="destinatario">Destinatario:</label><br>
                               <input class="col-6 mt-3" type="text" name="destinatario" id="destinatario" value="<?= $valor->getDestinatario() ?>" required />
                           </div>
                           <br/>
                           <div>
                               <label for="precio">Precio:</label><br>
                               <input class="col-6 mt-3" type="number" name="precio" id="precio" value="<?= $valor->getPrecio() ?>" required />
                           </div>
                           <br/>
                           <div>
                               <label for="estado">Estado:</label><br>
                               <select class="form col-6 text-center mt-3" name="estado" id="estado" aria-label="Default select example">
                                   <option selected value="<?= $valor->getEstado() ?>"><?= $valor->getEstado() ?></option>
                                   <option value="Comprado">Comprado</option>
                                   <option value="pendiente">Pendiente</option>
                               </select>
                           </div>
                           <br/>
                           <div>
                               <label for="anio">Año:</label><br>
                               <input class="col-6 mt-3 text-center" type="date" name="anio" id="anio" value="<?= $valor->getAnio() ?>" required />
                           </div>
<?php
                           
                           $usuario = unserialize($_SESSION['usuario']);
                           echo '<input type="hidden" name="id" value=" ' . $usuario -> getId() . ' ">';
                           echo '<input type="hidden" name="idRegalo" value="'.$id.'">';
                           
?>
                            <div class="col-6 text-end mt-3">
                                <button type="submit" class="btn btn-danger" name="accion" value="enviarModificarRegalo">Enviar</button>
                            </div>
                           
                       </form>
                   </div>
<?php
           }  
        }

    }


?>