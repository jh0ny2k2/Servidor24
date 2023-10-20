<?php

    //INICIALIZAMOS LA SESION ANTES DE TODO
    session_start();
    //session_destroy();

    //CREAMOS UNA FUNCION PARA SACAR UNA CARTA ALEATORIA DE LA BARAJA
    function sacarCarta (){
        $cartas = array (
            array("nombre" => "c1", "url" => "./cartas/c1.svg", "value" => 5),
            array("nombre" => "c2", "url" => "./cartas/c2.svg", "value" => 2),
            array("nombre" => "c3", "url" => "./cartas/c3.svg", "value" => 3),
            array("nombre" => "c4", "url" => "./cartas/c4.svg", "value" => 4),
            array("nombre" => "c5", "url" => "./cartas/c5.svg", "value" => 5),
            array("nombre" => "c6", "url" => "./cartas/c6.svg", "value" => 6),
            array("nombre" => "c7", "url" => "./cartas/c7.svg", "value" => 7),
            array("nombre" => "c11", "url" => "./cartas/c11.svg", "value" => 5),
            array("nombre" => "c12", "url" => "./cartas/c12.svg", "value" => 5),
            array("nombre" => "c13", "url" => "./cartas/c12.svg", "value" => 5),
            array("nombre" => "d1", "url" => "./cartas/d1.svg", "value" => 5),
            array("nombre" => "d2", "url" => "./cartas/d2.svg", "value" => 2),
            array("nombre" => "d3", "url" => "./cartas/d3.svg", "value" => 3),
            array("nombre" => "d4", "url" => "./cartas/d4.svg", "value" => 4),
            array("nombre" => "d5", "url" => "./cartas/d5.svg", "value" => 5),
            array("nombre" => "d6", "url" => "./cartas/d6.svg", "value" => 6),
            array("nombre" => "d7", "url" => "./cartas/d7.svg", "value" => 7),
            array("nombre" => "d11", "url" => "./cartas/d11.svg", "value" => 5),
            array("nombre" => "d12", "url" => "./cartas/d12.svg", "value" => 5),
            array("nombre" => "d13", "url" => "./cartas/d13.svg", "value" => 5),
            array("nombre" => "p1", "url" => "./cartas/p1.svg", "value" => 5),
            array("nombre" => "p2", "url" => "./cartas/p2.svg", "value" => 2),
            array("nombre" => "p3", "url" => "./cartas/p3.svg", "value" => 3),
            array("nombre" => "p4", "url" => "./cartas/p4.svg", "value" => 4),
            array("nombre" => "p5", "url" => "./cartas/p5.svg", "value" => 5),
            array("nombre" => "p6", "url" => "./cartas/p6.svg", "value" => 6),
            array("nombre" => "p7", "url" => "./cartas/p7.svg", "value" => 7),
            array("nombre" => "p11", "url" => "./cartas/p11.svg", "value" => 5),
            array("nombre" => "p12", "url" => "./cartas/p12.svg", "value" => 5),
            array("nombre" => "p13", "url" => "./cartas/p13.svg", "value" => 5),
            array("nombre" => "t1", "url" => "./cartas/t1.svg", "value" => 5),
            array("nombre" => "t2", "url" => "./cartas/t2.svg", "value" => 2),
            array("nombre" => "t3", "url" => "./cartas/t3.svg", "value" => 3),
            array("nombre" => "t4", "url" => "./cartas/t4.svg", "value" => 4),
            array("nombre" => "t5", "url" => "./cartas/t5.svg", "value" => 5),
            array("nombre" => "t6", "url" => "./cartas/t6.svg", "value" => 6),
            array("nombre" => "t7", "url" => "./cartas/t7.svg", "value" => 7),
            array("nombre" => "t11", "url" => "./cartas/t11.svg", "value" => 5),
            array("nombre" => "t12", "url" => "./cartas/t12.svg", "value" => 5),
            array("nombre" => "t13", "url" => "./cartas/t13.svg", "value" => 5),
        );

        foreach ($cartas as $valor) {
            $baraja[] = ['nombre' => $valor["nombre"], 'url' => $valor["url"], 'value' => $valor["value"]];
        }

        $baraja.shuffle();

        return $baraja;
    }     

    function cartaEnviada(&$mano) {
        $carta = array_shift($_SESSION['baraja']);
        $mano[] = $carta;
        return $carta;
    }

    //CREAMOS UNA FUNCION PARA CALCULAR EL VALOR TOTAL DE LA PARTIDA
    function calcularValor ($mano){
        //CREAMOS UN CONTADOR PARA METER LA SUMA DE LA PARTIDA
        $contador = 0;

        //REALIZAMOS UN FOREACH PARA RECORRER EL ARRAY DE LA SESION QUE CONTIENE LAS CARTAS
        foreach ($mano as $valor) {
            //REALIZAMOS LA SUMA DEL VALOR DE LAS CARTAS
            $contador = $contador + $valor["value"];
        }

        //RETURNAMOS EL VALOR TOTAL DE LA PARTIDA
        return $contador;
    }

    //COMPROBAMOS SI VIENE POR $_POST
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'deal') {
            $_SESSION['playerHand'] = [];
            $_SESSION['playerHand'][] = dealCard($_SESSION['playerHand']);
        } elseif ($_POST['action'] == 'hit' && calculateHandValue($_SESSION['playerHand']) < 7.5) {
            $_SESSION['playerHand'][] = dealCard($_SESSION['playerHand']);
        } elseif ($_POST['action'] == 'restart') {
            $_SESSION['totalGames']++;
            $playerValue = calculateHandValue($_SESSION['playerHand']);
    
            if ($playerValue == 7.5) {
                $_SESSION['gamesWon']++;
            } else {
                $_SESSION['gamesLost']++;
            }
    
            $_SESSION['playerHand'] = [];
        }
    }


?>