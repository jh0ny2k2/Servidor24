<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos // Formula 1</title>
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
      <img class="foto" src="images/red.jpg" alt="">
      <section>
        <div class="container">
          <h1>EQUIPOS</h1>
          <div class="equipos">
            
<?php
                    $uri = "https://ergast.com/api/f1/2023/constructors.json";       
                    $reqPrefs['http']['method'] = 'GET';
                    $reqPrefs['http']['header'] = '';
                    $stream_context = stream_context_create($reqPrefs);
                    $resultado = file_get_contents($uri, false, $stream_context);
                    
                    //Pasar de json a objeto php y recorrer los resultados
                    if ($resultado != false) {
                        $respPHP = json_decode($resultado);

                        foreach($respPHP->MRData->ConstructorTable->Constructors as $piloto) {
                            echo '<section class="row" style=" border-top: 2px solid rgb(106, 0, 255);
                            border-right: 2px solid rgb(106, 0, 255);">';
                            echo '<img src="images/logos/'. $piloto->constructorId .'.png" style="margin-left: 0%;" width="100" alt=""><br>';
                            echo '<h2>' . $piloto->name . '</h2>';         
                            echo '<br><img src="images/coches/'. $piloto->constructorId .'.png" width="500" alt="">';
                            echo '</section>';
                        }
                    }          
?>
          </div>
        </section>
          </div>

    </main>
</body>
</html>