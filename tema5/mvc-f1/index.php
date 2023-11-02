<?php
    namespace Formula1;
    use Formula1\controladores\ControladorFormula1;

    //Autocargar las clases --------------------------
    spl_autoload_register(function ($class) {
        //echo substr($class, strpos($class,"\\")+1);
        $ruta = substr($class, strpos($class,"\\")+1);
        $ruta = str_replace("\\", "/", $ruta);
        include_once "./" . $ruta . ".php"; 
    });
    //Fin Autcargar ----------------------------------


    if (isset($_REQUEST)) {
        //Tratamiento de botones, forms, ...
        if (isset($_REQUEST["accion"])) {

            if(strcmp($_REQUEST["accion"], "mostrarResultados") == 0) {
                ControladorFormula1::mostrarResultados();
            }

        } else {
            //Mostrar inicio
            ControladorFormula1::mostrarInicio();
        }
    }





?>