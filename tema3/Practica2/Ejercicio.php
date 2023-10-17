<?php


    $cartas = array (
        array("nombre" => "c1", "url" => "./cartas/c2.svg", "value" => 5),
        array("nombre" => "c2", "url" => "", "value" => 2),
        array("nombre" => "c3", "url" => "", "value" => 3),
        array("nombre" => "c4", "url" => "", "value" => 4),
        array("nombre" => "c5", "url" => "", "value" => 5),
        array("nombre" => "c6", "url" => "", "value" => 6),
        array("nombre" => "c7", "url" => "", "value" => 7),
        array("nombre" => "c11", "url" => "", "value" => 5),
        array("nombre" => "c12", "url" => "", "value" => 5),
        array("nombre" => "c13", "url" => "", "value" => 5),
        array("nombre" => "d1", "url" => "", "value" => 5),
        array("nombre" => "d2", "url" => "", "value" => 2),
        array("nombre" => "d3", "url" => "", "value" => 3),
        array("nombre" => "d4", "url" => "", "value" => 4),
        array("nombre" => "d5", "url" => "", "value" => 5),
        array("nombre" => "d6", "url" => "", "value" => 6),
        array("nombre" => "d7", "url" => "", "value" => 7),
        array("nombre" => "d11", "url" => "", "value" => 5),
        array("nombre" => "d12", "url" => "", "value" => 5),
        array("nombre" => "d13", "url" => "", "value" => 5),
        array("nombre" => "p1", "url" => "", "value" => 5),
        array("nombre" => "p2", "url" => "", "value" => 2),
        array("nombre" => "p3", "url" => "", "value" => 3),
        array("nombre" => "p4", "url" => "", "value" => 4),
        array("nombre" => "p5", "url" => "", "value" => 5),
        array("nombre" => "p6", "url" => "", "value" => 6),
        array("nombre" => "p7", "url" => "", "value" => 7),
        array("nombre" => "p11", "url" => "", "value" => 5),
        array("nombre" => "p12", "url" => "", "value" => 5),
        array("nombre" => "p13", "url" => "", "value" => 5),
        array("nombre" => "t1", "url" => "", "value" => 5),
        array("nombre" => "t2", "url" => "", "value" => 2),
        array("nombre" => "t3", "url" => "", "value" => 3),
        array("nombre" => "t4", "url" => "", "value" => 4),
        array("nombre" => "t5", "url" => "", "value" => 5),
        array("nombre" => "t6", "url" => "", "value" => 6),
        array("nombre" => "t7", "url" => "", "value" => 7),
        array("nombre" => "t11", "url" => "", "value" => 5),
        array("nombre" => "t12", "url" => "", "value" => 5),
        array("nombre" => "t13", "url" => "", "value" => 5),
    );

    foreach ($cartas as $valor){
        echo '<img src="' . $valor["url"] . '">';
    }
   
?>