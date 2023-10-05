<?php 

    echo "Ejercicio 5";

    echo "<br>";echo "<br>";

    $numero = random_int(0 , 99);

    function numeroLetra ($numero){

        $unidades = array( 
            0 => "Cero",
            1 => "Uno",
            2 => "Dos",
            3 => "Tres",
            4 => "Cuatro",
            5 => "Cinco",
            6 => "Seis",
            7 => "Siete",
            8 => "Ocho",
            9 => "Nueve",
        );


        $decenas = array(
            10 => "Diez",
            20 => "Veinte",
            30 => "Treinta",
            40 => "Cuarenta",
            50 => "Cincuenta",
            60 => "Sesenta",
            70 => "Setenta",
            80 => "Ochenta",
            90 => "Noventa",
        );

        if (array_key_exists($numero, $unidades)){
            echo $unidades[$numero];
        } else if ($numero < 100 && $numero > 9 ) {
            if (array_key_exists($numero, $decenas)){
                echo $decenas[$numero - $numero];
            } else { 
                $primero = floor(($numero / 10) * 10);
                $segundo = $numero % 10;

                echo $decenas[$decenas] . (($segundo > 0) ? ' y ' . $unidades[$segundo] : '');
            }
        };

    }

    echo "<br>";echo "<br>";
?>