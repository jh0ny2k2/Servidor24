<?php
  include "cabecera.php";
?>

    <main class="container">

        <h3 class="text-center">Carro de la compra</h3>

    

<?php 


    //CREAMOS EL ARRAY CON LOS PRODUCTOS DE EL CARRITO DE LA COMPRA 
    $carrito = array (
        array("id" => 1234, "nombre" => "PS4", "precio" => 540, "cantidad" => 2, "ivaR" => 0),
        array("id" => 1235, "nombre" => "Iphone XS", "precio" => 100, "cantidad" => 1, "ivaR" => 0),
        array("id" => 1236, "nombre" => "Redmi note 12", "precio" => 350, "cantidad" => 1, "ivaR" => 1),
        array("id" => 1237, "nombre" => "xiaomi bund 2 pro", "precio" => 30, "cantidad" => 1, "ivaR" => 1),
        array("id" => 1238, "nombre" => "Lenovo Ideapad 1", "precio" => 650, "cantidad" => 1, "ivaR" => 0),
    );


    //VAMOS A REALIZAR UNA TABLA CON LA LISTA DEL CARRITO
    echo '<table class="table-secondary table table-hover rounded-10 overflow-hidden table-bordered">';
    
    //REALIZAMOS LA CABECERA DE LA TABLA
    echo '  <thead class="table-dark">';
    echo        '<tr>';
    echo '          <th scope="col"></th>';
    echo '          <th scope="col">Nombre</th>';
    echo '          <th scope="col">Cantidad</th>';
    echo '          <th scope="col">Precio</th>';
    echo '      </tr>';
    echo '  </thead>';

    //INICIALIZAMOS UN CONTADOR PARA LA LISTA
    $numero = 1;

    //REALIZAMOS EL CUERPO DE LA TABLA COGUIENDO ASÍ LOS ELEMENTOS DEL ARRAY
    foreach ($carrito as $valor) {

        echo '  <tbody class="table-group-divider">';
            echo '<tr>';
            echo '  <th> ' . $numero++ . '</th>';        
            echo '  <th> ' . $valor["nombre"] . '</th>';
            echo '  <th> ' . $valor["cantidad"] . '</th>';
            echo '  <th> ' . $valor["precio"] . '</th>';
            echo '</tr>';
        echo '  </tbody>';

    }

    //INICIALIZAMOS UN CONTADOR PARA CALCULAR EL COSTE SIN IVA
    $totalSinIva = 0;


    //CREAMOS UN CONTADOR A CERO PARA CALCULAR EL VALOR AL AÑADIRLE EL IVA 
    $totalIva = 0;

    //CREAMOS UN FOREACH PARA RECORRER EL ARRAY DE CARRITO  ( TOTAL CON IVA )
    foreach ($carrito as $valor) {
    
        //CREAMOS UN IF PARA COMPROBAR SI TIENE EL IVA DE 21% O EL IVA DE 8%
        if ($valor["ivaR"] == 0) {
            $totalIva += ($valor["precio"] * 1.08) * $valor["cantidad"];
        } else {
            $totalIva += ($valor["precio"] * 1.21) * $valor["cantidad"];
        }
    }

    //CREAMOS UN FOREACH PARA RECORRER EL ARRAY DE CARRITO  ( TOTAL SIN IVA )
    foreach ($carrito as $valor) {
    
        $totalSinIva = $totalSinIva + ($valor["cantidad"] * $valor["precio"]);

    }

    //REALIZAMOS EL PIE DE LA TABLA CON EL TOTAL DE PRECIO
    echo '<tfoot>';
    echo '  <tr>';
    echo '      <th colspan="2" class="bg-white border-white"></th>';
    echo '      <th> Total con IVA: </th>';
    echo '      <th> ' . $totalIva . '€</th>';
    echo '  </tr>';
    echo '  <tr>';
    echo '      <th colspan="2" class=" bg-white border-white"></th>';
    echo '      <th> Total sin IVA: </th>';
    echo '      <th> ' . $totalSinIva . '€</th>';
    echo '  </tr>';
    echo '</tfoot>';
    
    echo '</table>';

    
?>


    </main> 