<?php 

    echo "Ejercicio 4";

    echo "<br>";echo "<br>";

    $a = random_int(1,100);
    $b = random_int(1,100);
    $c = random_int(1,100);

    $raiz = pow($b,2) - (4 * $a * $c);

    if ($raiz == 0 ) {
        echo $solucion = "Solamente tiene una solución y es:" (-$b / (2 * $a));
    } else if ( $raiz > 0 ) {
        $solucion1 = (-$b + sqrt($raiz)) / (2 * $a);
        $solucion2 = (-$b - sqrt($raiz)) / (2 * $a);

        echo "Tiene 2 soluciones y son:" . $solucion1 . " y " . $solucion2;
    } else {
        echo "No tiene ninguna solución";
    }

    echo "<br>";echo "<br>";

?>