<?php 

    //CREAMOS UN ARRAY CON LOS NUMEROS PEDIDOS
    $numeros = array (1,2,3,4,5,6,7,8,9,10);

    //CREAMOS LOS CONTADORES PARA HACER LA MEDIA
    $sumaPares = 0;
    $contadorPares = 0;

    //CREAMOS UN FOREACH CON UN IF PARA SACAR LOS NUMEROS PARES
    foreach ($numeros as $valor => $numero) {
        if ($valor / 2 == 0){

            //AUMENTAMOS EN UNO EL CONTADOR DE LOS PARES PARA SABER CUANTOS TENEMOS EN TOTAL
            $contadorPares++;

            //SUMAMOS LA CANTIDAD DE LOS NUMEROS PARES
            $sumaPares = $sumaPares + $numero;

            //CALCULAMOS LA MEDIA DE LOS PARES
            $resultado = $sumaPares / $contadorPares;
            
            //PRINTEAMOS EN PANTALLA EL RESULTADO FINAL    
            echo "La media de los numeros pares es: " . $resultado;
        }
    }

    //CREAMOS UN FOREACH CON UN IF PARA SACAR LOS NUMEROS PARES
    foreach ($numeros as $valor => $numero) {
       if ($valor / 2 != 0){

        echo "Los numeros impares " . $numero . "<br>";

       }
    }



?>