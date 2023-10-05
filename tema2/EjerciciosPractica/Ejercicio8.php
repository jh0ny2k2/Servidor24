<?php 

    //PONEMOS UN ANUNCIO
    echo "Vamos a crear numeros aleatorios para la loteria primitiva <br>";

    //CREAMOS UN ARRAY DE LOS OCHO NUMEROS ALEATORIOS
    $numeros = array ( random_int(1 , 49),random_int(1 , 49),random_int(1 , 49),random_int(1 , 49),random_int(1 , 49),random_int(1 , 49),random_int(1 , 49),random_int(1 , 49));

    echo "Los numeros son: <br>";

    //CREAMOS UN FOREACH PARA RECORRER EL ARRAY DE NUMEROS
    foreach ($numeros as $valor){
        
        //PRINTEAMOS EN PANTALLA EL RESULTADO
        echo $valor . "  ";
    }




?>