<?php

    function calcularValor ($valorCarta) {
        $contador = 0;

        $contador = $contador + $valorCarta;
    
        if ($contador >= 7.5){
            echo 'Has perdido, tu puntuación es superior a 7.5';
        } 

        echo $contador;

        return $contador;
    }

    


?> 