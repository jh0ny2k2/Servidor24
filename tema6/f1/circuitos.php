<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circuitos // Formula 1</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/f1.avif">
</head>
<body>
    <header>
        <nav>
            <div class="wrapper">
              <div class="logo"><a href="index.php">FORMULA 1</a></div>
              <!--<input type="radio" name="slider" id="menu-btn">
              <input type="radio" name="slider" id="close-btn">-->
              <ul class="nav-links">
                <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                <li><a href="pilotos.php">Pilotos</a></li>
                <li><a href="equipos.php">Equipos</a></li>
                <li><a href="circuitos.php">Circuitos</a></li>
                <li>
                  <a href="#" class="desktop-item">Clasificación</a>
                  <ul class="drop-menu">
                    <li><a href="clasificacionPilotos.php">Pilotos</a></li>
                    <li><a href="clasificacionEquipos.php">Equipos</a></li>
                  </ul>
                </li>
            </div>
          </nav>
    </header>
    <main>
      <img class="foto" src="images/f1tracks.jpg" alt="">
      <div class="container">
      <h1>CIRCUITOS</h1>
      <?php
                    $uri = "http://ergast.com/api/f1/2023/circuits.json";       
                    $reqPrefs['http']['method'] = 'GET';
                    $reqPrefs['http']['header'] = '';
                    $stream_context = stream_context_create($reqPrefs);
                    $resultado = file_get_contents($uri, false, $stream_context);
                    
                    $i = 1;
                    //Pasar de json a objeto php y recorrer los resultados
                    if ($resultado != false) {
                        $respPHP = json_decode($resultado);

                        foreach($respPHP->MRData->CircuitTable->Circuits as $piloto) {
                            echo '<h2>' .$i . ' . ' . $piloto->circuitName . '</h2>';
                            echo '<section class="rowCircuito">';
                            echo '<img src="images/Circuitos/' . $piloto->circuitId . '.jpg" width="500" alt="">';
                            echo '<p>Latitud: ' . $piloto->Location->lat . '<br> Longitud: ' . $piloto->Location->long . '<br> Localidad: ' . $piloto->Location->locality . '<br> País: ' . $piloto->Location->country . ' </p>';
                            echo '</section>';

                            $i++;
                        }
                    }          
?>

      </div>

      
    </main>
</body>
</html>