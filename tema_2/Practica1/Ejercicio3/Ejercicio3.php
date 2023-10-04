<?php
  include "cabeceraEjer3.php";
?>

<main class="container">

    <h3 class="text-center"></h3>


<?php

  $personajes = array (
    array ("nombre" => "Deadlock", "rol" => "Centinela", "descripcion" => "Deadlock, la agente noruega, despliega un surtido de avanzados nanocables para defender el campo de batalla de cualquier asalto, por letal que sea. Nadie escapa a su atenta mirada ni sobrevive a su ferocidad implacable.", "foto" => "./img/personajes/deadlock.jpg"),
    array ("nombre" => "Jett", "rol" => "Duelista", "descripcion" => "Jett viene de Corea del Sur, y su estilo de lucha ágil y evasivo le permite asumir grandes riesgos. Corre y salta de aquí para allá en las refriegas y hace trizas a los enemigos con una rapidez espectacular.", "foto" => "./img/personajes/jett.jpg"),
    array ("nombre" => "Raze", "rol" => "Duelista", "descripcion" => "Raze llega desde Brasil con ganas de hacer que todo salte por los aires. Con su estilo de juego basado en la fuerza bruta, destaca a la hora de barrer a grupos de enemigos atrincherados y de despejar áreas estrechas con explosión y sin compasión.","foto" => "./img/personajes/raze.jpg"),
    array ("nombre" => "Breach", "rol" => "Iniciador", "descripcion" => "Raze llega desde Brasil con ganas de hacer que todo salte por los aires. Con su estilo de juego basado en la fuerza bruta, destaca a la hora de barrer a grupos de enemigos atrincherados y de despejar áreas estrechas con explosión y sin compasión.","foto" => "./img/personajes/breach.jpg"),
    array ("nombre" => "Omen", "rol" => "Controlador", "descripcion" => "Omen es un fantasma de tiempos pasados que acecha en las sombras. Es capaz de cegar al enemigo, teleportarse a través del campo de batalla y sembrar el caos y la paranoia mientras sus rivales se preguntan dónde atacará la próxima vez.","foto" => "./img/personajes/omen.jpg"),
    array ("nombre" => "Brimstone", "rol" => "Controlador", "descripcion" => "De origen estadounidense, Brimstone cuenta con un arsenal de órbita que garantiza que su equipo siempre vaya por delante. Su capacidad para aportar herramientas de utilidad de una forma segura y precisa lo convierte en un comandante de primera línea sin igual.","foto" => "./img/personajes/brimstone.jpg"),
    array ("nombre" => "Phoenix", "rol" => "Duelista", "descripcion" => "Phoenix proviene del Reino Unido y sus poderes estelares salen a relucir con su estilo de combate, que prende fuego al campo de batalla de forma deslumbrante. No le hacen falta refuerzos; es él quién se lanza al combate y marca el ritmo.","foto" => "./img/personajes/phoenix.jpg"),
    array ("nombre" => "Sage", "rol" => "Centinela", "descripcion" => "Originaria de China, Sage destaca a la hora de crear espacios seguros para su equipo allá donde va. Sus capacidades especiales para revivir a compañeros caídos en batalla y para mantener a raya los asaltos enemigos la convierten en la calma en mitad de la tormenta para su equipo.","foto" => "./img/personajes/sage.jpg"),
    array ("nombre" => "Sova", "rol" => "Iniciador", "descripcion" => "Nacido en el eterno invierno de la tundra rusa, Sova destaca a la hora de localizar, perseguir y eliminar a los enemigos con una eficiencia y una precisión inclementes. Su arco personalizado junto con su sobrenatural capacidad de rastreamiento hacen que sea imposible escapar.","foto" => "./img/personajes/sova.jpg"),
    array ("nombre" => "Viper", "rol" => "Controlador", "descripcion" => "Viper es una química estadounidense con un amplio arsenal de dispositivos venenosos que le sirven para tomar el control del campo de batalla y cegar a los enemigos. Si las toxinas no acaban con su presa, la paranoia la rematará.","foto" => "./img/personajes/viper.jpg"),
    array ("nombre" => "Cypher", "rol" => "Centinela", "descripcion" => "Cypher es un experto en información de Marruecos que se especializa en redes de vigilancia y es capaz de seguirle la pista al enemigo constantemente. No hay secreto a salvo ni maniobra que pase desapercibida.","foto" => "./img/personajes/cypher.jpg"),
    array ("nombre" => "Reyna", "rol" => "Duelista", "descripcion" => "Desde el corazón de México, Reyna llega para dominar los combates uno contra uno y cada asesinato que consigue la hace más fuerte. Su potencial es prácticamente infinito, y la destreza individual es el único factor determinante de su éxito.","foto" => "./img/personajes/reyna.jpg"),
    array ("nombre" => "Killjoy", "rol" => "Centinela", "descripcion" => "Killjoy es una brillante agente alemana que se encarga de tomar posiciones clave del campo de batalla con su arsenal de inventos. Si su daño no acaba con los enemigos, su horda de robots ayudará a su equipo a despejarlos en un abrir y cerrar de ojos.","foto" => "./img/personajes/killjoy.jpg"),
    array ("nombre" => "Skye", "rol" => "Iniciador", "descripcion" => "Skye y su manada de bestias se abren paso desde Australia y a través de territorio hostil. Sus creaciones obstaculizan los avances enemigos y su capacidad para curar a los demás se ocupa de que, a su lado, su equipo esté a salvo.","foto" => "./img/personajes/skye.jpg"),
    array ("nombre" => "Yoru", "rol" => "Duelista", "descripcion" => "Yoru, nacido en Japón, abre agujeros en el tejido de la realidad para infiltrarse tras las líneas enemigas sin ser visto. Utiliza el engaño y la agresividad por igual para acabar con sus objetivos antes de que sepan qué ha pasado.","foto" => "./img/personajes/yoru.jpg"),
    array ("nombre" => "Astra", "rol" => "Controlador", "descripcion" => "Astra, la agente ghanesa, controla las energías del cosmos para dar forma al campo de batalla a su antojo. Con pleno dominio de su forma astral y un gran talento para la anticipación estratégica, siempre va eones por delante de los movimientos de sus enemigos.","foto" => "./img/personajes/astra.jpg"),
    array ("nombre" => "Kay/o", "rol" => "Iniciador", "descripcion" => "KAY/O es una máquina de guerra construida con un único propósito: neutralizar a los radiantes. Su poder para suprimir habilidades enemigas incapacita a sus adversarios, lo que asegura la ventaja para él y sus aliados.","foto" => "./img/personajes/kayp.jpg"),
    array ("nombre" => "Chamber", "rol" => "Centinela", "descripcion" => "El diseñador de armas francés, siempre bien vestido y bien pertrechado, expulsa a los agresores con precisión letal. Chamber aprovecha su arsenal personalizado para resistir, elimina enemigos a distancia y crea la contingencia perfecta para cada plan.","foto" => "./img/personajes/chamber.jpg"),
    array ("nombre" => "Neon", "rol" => "Duelista", "descripcion" => "Neon, una agente filipina, se lanza hacia la batalla a una velocidad trepidante, disparando descargas bioeléctricas tan rápido como las genera su cuerpo. Se adelanta para pillar a sus enemigos desprevenidos y acaba con ellos más rápido que una bala.","foto" => "./img/personajes/neon.jpg"),
    array ("nombre" => "Fade", "rol" => "Iniciador", "descripcion" => "Fade, la cazarrecompensas turca, controla el poder de las pesadillas para poner al descubierto los secretos de los enemigos. Armada con el terror mismo, da caza a sus objetivos y revela sus miedos más profundos, para después acabar con ellos en la oscuridad.","foto" => "./img/personajes/fade.jpg"),
    array ("nombre" => "Harbor", "rol" => "Controlador", "descripcion" => "Desde las costas de la India, Harbor llega al campo de batalla armado con tecnología ancestral capaz de controlar el agua. Libera espumosos torrentes y demoledoras olas para escudar a sus aliados o machacar a quien se interponga en su camino.","foto" => "./img/personajes/harbor.jpg"),
    array ("nombre" => "Gekko", "rol" => "Iniciador", "descripcion" => "Gekko, de Los Ángeles, lidera una pequeña pandilla de calamitosas criaturas. Sus colegas toman la delantera para dispersar a los enemigos, mientras que Gekko los persigue para luego reagruparse y repetir el proceso.","foto" => "./img/personajes/gekko.jpg"),
  );


  $roles = array(
    array ("nombre" => "Iniciador", "descripcion" => "Los iniciadores se adentran en terreno en disputa y revelan la posición de los agentes del otro equipo haciéndolos visibles no sólo para ellos sino también para los aliados.", "foto1" => "./img/Centinela.webp", "url" => "./img/personajes/fade.jpg"),
    array ("nombre" => "Duelista", "descripcion" => "Rol que equivale al Entry Fragger de CS:GO. Su función es ganar la posición, hacer el mayor daño y retirarse, a poder ser con la baja o si no, al menos dañar mucho al equipo enemigo y dar la información.", "foto1" => "./img/Duelista.webp", "url" => "./img/personajes/fade.jpg"),
    array ("nombre" => "Centinela", "descripcion" => "Los centinelas son agentes con un marcado componente defensivo, y sus habilidades se centran en ralentizar o impedir el paso a los enemigos. Útiles para impedir entrar en la zona de plante, tanto en la defensa como en el ataque.", "foto1" => "./img/Centinela.webp", "url" => "./img/personajes/fade.jpg"),
    array ("nombre" => "Controlador", "descripcion" => "Estos agentes tienen la habilidad de cambiar o alterar las condiciones del mapa. Pueden levantar muros tanto sólidos como gaseosos dividiendo las zonas.", "foto" => "./img/personajes/gekko.jpg", "url" => "./img/personajes/fade.jpg"),
  ); 

  echo '<div>';
  echo '  <div>';
  echo '    <h2>ELIGE TU ROL</h2>';
  echo '    <h4>En valorant jugarás como una de los 4 roles, cada heroe tiene aparencia, estilo, poderes, y habilidades distintas, así que tu elección no será meramente estética</h4>';
  echo '  </div>';
  echo '  <div>';
  echo '<br>';

  echo '  <div class="row">';
  foreach ($roles as $valor){
    echo '  <h3>' . $valor["nombre"]. '</h3>';
    echo '  <div>';
    echo '    <div>
                <p> ' . $valor["foto"]. '</p>
              </div>';
    echo '    <div>
                <p> ' . $valor["descripcion"]. '</p>
              </div>';
    echo '  </div>';


    echo '<div class="row ">';
    foreach($personajes as $linea) {

        if ($valor["nombre"] == $linea["rol"]){
          echo '
          <div class="card col-4 mb-4 mt-5" style="width: 18rem;">
              <img src="'.$linea["foto"].'" class="card-img-top" alt="...">
              <div class="card-body">
                  <h6 class="card-title">'.$linea["nombre"].'</h6>
              </div>
          </div>
           ';
        }
        echo '<br>';

    }
    echo '<br>';
  }
  echo '  </div>';
  echo '  </div>';
  echo '</div>';

  

  



 

?>

</main> 