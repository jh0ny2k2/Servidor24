//<?php
    //INICIAMOS SESION ANTES QUE NADA
    //session_start();  
    //include "controlador.php";

    //PRINTEAMOS LA CARTA DEL DORSO
    //echo '<div class="">';
            //CREAMOS UN BOTON QUE FUNCIONE PARA PODER PULSAR Y QUE SAQUE UNA CARTA
    //echo '  <button name="sacarCarta"><img src="./cartas/dorso-rojo.svg" width="200"></button>';
    //echo '</div>';
   
    //if ()
//?>

<?php
    
    
    /**************FUNCTION****************/
    
    function value($valor){
        $salida = -1;
        
        if($valor == 0 or $valor == 10 or $valor == 20 or $valor == 30){
            $salida = 1;
            
        }else if($valor == 1 or $valor == 11 or $valor == 21 or $valor == 31){
            $salida = 2;
            
        }else if($valor == 2 or $valor == 12 or $valor == 22 or $valor == 32){
            $salida = 3;
            
        }else if($valor == 3 or $valor == 13 or $valor == 23 or $valor == 33){
            $salida = 4;
            
        }else if($valor == 4 or $valor == 14 or $valor == 24 or $valor == 34){
            $salida = 5;
            
        }else if($valor == 5 or $valor == 15 or $valor == 25 or $valor == 35){
            $salida = 6;
            
        }else if($valor == 6 or $valor == 16 or $valor == 26 or $valor == 36){
            $salida = 7;
        
        }else{
            $salida = 0.5;
        }
        
        return $salida;
    }
    
    function putCard() {
        $card = rand(0,39);
        
        echo "<img src='".$card.".jpg'/>";
        
        return value($card);
    }
    
    
    
    function onePlay(){
        $max = 7.5;
        
        $score = putCard();
        
        while($score <= 7.5){
        
            $score += putCard();
            
            if($score > 5 ){
                break;
            }else{
                $score += putCard();
            }
        }
        
        if($score <= 7.5){
            echo "Score: $score.";
        }else{
            echo "Score: $score. <b>Pass</b>";
        }
        return $score;
    }
    
    
    
    /**************MAIN*****************/
    
    
    //$players = $_GET['players'];
    $winner = 0;
    
    for($i= 1; $i <= $players; $i++ ){
        
        echo "<H3>Player: $i </H3>";
        
        $score = onePlay();
        
        
    }
    

    
?>