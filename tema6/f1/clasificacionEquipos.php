<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificacion // Formula 1</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/f1.avif">
</head>
<body>
    <header>
        <nav>
            <div class="wrapper">
              <div class="logo"><a href="index.php">FORMULA 1</a></div>
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
        <img src="images/verstappen-temporada-2023-123822-1024x576.jpg" alt="" style="width: 100%;">

        <div class="container">
            <h1>CLASIFICACION EQUIPOS</h1>
            <br><br>
            <table>
                <thead>
                    <tr>
                        <th>Posicion</th>
                        <th>Escuderia</th>
                        <th>Puntos</th>
                    </tr>
                </thead>
                <tbody>
                    
<?php
                    $uri = "https://ergast.com/api/f1/2023/20/constructorStandings.json";       
                    $reqPrefs['http']['method'] = 'GET';
                    $reqPrefs['http']['heeader'] = ' ';
                    $stream_context = stream_context_create($reqPrefs);
                    $resultado = file_get_contents($uri, false, $stream_context);
                    
                    //Pasar de json a objeto php y recorrer los resultados
                    if ($resultado != false) {
                        $respPHP = json_decode($resultado);
                         
                        foreach($respPHP->MRData->StandingsTable->StandingsLists[0]->ConstructorStandings as $piloto) {
                            echo '<tr>';
                            echo '<td>'. $piloto->position .'</td>';
                            echo '<td>'. $piloto->Constructor->name  .'</td>';
                            echo '<td>'. $piloto->points .'</td>';
                            echo '</tr>';
                        }
                    }          
?>

                </tbody>
            </table>
            
        </div>
        
    </main>
</body>
</html>