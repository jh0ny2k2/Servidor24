<?php 

    //DEFINIMOS EL ARRAY CON 5 ELEMENTOS CON UN NUMERO ALEATORIO ENTRE EL 1 Y EL 10
    $array = array (random_int(1, 10),random_int(1, 10),random_int(1, 10),random_int(1, 10),random_int(1, 10));

    //CREAMOS EL FOREACH PARA RECORRER EL ARRAY UNO A UNO
    foreach ($array as $valor) {

        echo "La tabla de multiplicar de " . $valor . "<br>";

        //REALIZAMOS UN FOR PARA CREAR LA TABLA DE MULTIPLICAR
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $valor * $i;

            //PRINTEAMOS EL RESULTADO DE LA TABLA DE MULTIPLICAR
            echo $valor . " x " . $i . " = " . $resultado . "<br>";
        }
    }

?>