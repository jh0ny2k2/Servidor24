<?php
  include "cabecera.php";
?>

<main class="container">

    <h3 class="text-center">Lista de libros</h3>
    
<?php

    //CREAMOS UNA VARIABLE PARA CREAR EL ISBN
    $numero = 123456789123;

    //CREAMOS UN ARRAY DE TODOS LOS LIBROS QUE TENEMOS EN LA TIENDA
    $libros = array (
        array("ISBN" => $numero++, "titulo" => "La chica del verano", "descripcion" => "Una apasionante novela de amor y misterio en un idílico pueblo costero.", "categoria" => "novela", "editorial" => "Libros Cúpula", "foto" => "./img2/i1.webp", "precio" => 19.00),
        array("ISBN" => $numero++, "titulo" => "LA ARMADURA DE LA LUZ", "descripcion" => "Un emocionante viaje por el cosmos en busca de respuestas sobre la luz y la vida.", "categoria" => "ciencia", "editorial" => "PLAZA & JANES EDITORES", "foto" => "./img2/i2.webp", "precio" => 23.00),
        array("ISBN" => $numero++, "titulo" => "EL PROBLEMA FINAL", "descripcion" => "Una intrigante historia de ciencia ficción que desafía la lógica y el tiempo.", "categoria" => "scifi", "editorial" => "ALFAGUARA", "foto" => "./img2/i3.webp", "precio" => 20.00),
        array("ISBN" => $numero++, "titulo" => "HOLLY", "descripcion" => "Descubre los secretos de la cocina gourmet en este libro lleno de recetas y técnicas culinarias.", "categoria" => "cocina", "editorial" => "PLAZA & JANES EDITORES", "foto" => "./img2/i4.webp", "precio" => 22.00),
        array("ISBN" => $numero++, "titulo" => "BOCABESADA", "descripcion" => "Una emocionante crónica de las hazañas deportivas más impresionantes de la historia.", "categoria" => "deporte", "editorial" => "ESPASA LIBROS", "foto" => "./img2/i5.webp", "precio" => 19.00),
        array("ISBN" => $numero++, "titulo" => "LOS INOCENTES", "descripcion" => "Una profunda exploración de los eventos históricos que cambiaron el curso de la humanidad.", "categoria" => "historia", "editorial" => "DESTINO", "foto" => "./img2/i6.webp", "precio" => 20.00),
        array("ISBN" => $numero++, "titulo" => "LA ROSA Y LAS ESPINAS", "descripcion" => "Una mirada cautivadora al mundo de la ciencia y la naturaleza a través de la rosa.", "categoria" => "ciencia", "editorial" => "LA ESFERA DE LOS LIBROS", "foto" => "./img2/i7.webp", "precio" => 19.00),
        array("ISBN" => $numero++, "titulo" => "La chica del verano", "descripcion" => "Una apasionante novela de amor y misterio en un idílico pueblo costero.", "categoria" => "novela", "editorial" => "Libros Cúpula", "foto" => "./img2/i1.webp", "precio" => 19.00),
        array("ISBN" => $numero++, "titulo" => "LA ARMADURA DE LA LUZ", "descripcion" => "Un emocionante viaje por el cosmos en busca de respuestas sobre la luz y la vida.", "categoria" => "ciencia", "editorial" => "PLAZA & JANES EDITORES", "foto" => "./img2/i2.webp", "precio" => 23.00),
        array("ISBN" => $numero++, "titulo" => "EL PROBLEMA FINAL", "descripcion" => "Una intrigante historia de ciencia ficción que desafía la lógica y el tiempo.", "categoria" => "scifi", "editorial" => "ALFAGUARA", "foto" => "./img2/i3.webp", "precio" => 20.00),
        array("ISBN" => $numero++, "titulo" => "HOLLY", "descripcion" => "Descubre los secretos de la cocina gourmet en este libro lleno de recetas y técnicas culinarias.", "categoria" => "cocina", "editorial" => "PLAZA & JANES EDITORES", "foto" => "./img2/i4.webp", "precio" => 22.00),
        array("ISBN" => $numero++, "titulo" => "BOCABESADA", "descripcion" => "Una emocionante crónica de las hazañas deportivas más impresionantes de la historia.", "categoria" => "deporte", "editorial" => "ESPASA LIBROS", "foto" => "./img2/i5.webp", "precio" => 19.00),
        array("ISBN" => $numero++, "titulo" => "LOS INOCENTES", "descripcion" => "Una profunda exploración de los eventos históricos que cambiaron el curso de la humanidad.", "categoria" => "historia", "editorial" => "DESTINO", "foto" => "./img2/i6.webp", "precio" => 20.00),
        array("ISBN" => $numero++, "titulo" => "LA ROSA Y LAS ESPINAS", "descripcion" => "Una mirada cautivadora al mundo de la ciencia y la naturaleza a través de la rosa.", "categoria" => "ciencia", "editorial" => "LA ESFERA DE LOS LIBROS", "foto" => "./img2/i7.webp", "precio" => 19.00),
        array("ISBN" => $numero++, "titulo" => "La chica del verano", "descripcion" => "Una apasionante novela de amor y misterio en un idílico pueblo costero.", "categoria" => "novela", "editorial" => "Libros Cúpula", "foto" => "./img2/i1.webp", "precio" => 19.00),
        array("ISBN" => $numero++, "titulo" => "LA ARMADURA DE LA LUZ", "descripcion" => "Un emocionante viaje por el cosmos en busca de respuestas sobre la luz y la vida.", "categoria" => "ciencia", "editorial" => "PLAZA & JANES EDITORES", "foto" => "./img2/i2.webp", "precio" => 23.00),
        array("ISBN" => $numero++, "titulo" => "EL PROBLEMA FINAL", "descripcion" => "Una intrigante historia de ciencia ficción que desafía la lógica y el tiempo.", "categoria" => "scifi", "editorial" => "ALFAGUARA", "foto" => "./img2/i3.webp", "precio" => 20.00),
        array("ISBN" => $numero++, "titulo" => "HOLLY", "descripcion" => "Descubre los secretos de la cocina gourmet en este libro lleno de recetas y técnicas culinarias.", "categoria" => "cocina", "editorial" => "PLAZA & JANES EDITORES", "foto" => "./img2/i4.webp", "precio" => 22.00),
        array("ISBN" => $numero++, "titulo" => "BOCABESADA", "descripcion" => "Una emocionante crónica de las hazañas deportivas más impresionantes de la historia.", "categoria" => "deporte", "editorial" => "ESPASA LIBROS", "foto" => "./img2/i5.webp", "precio" => 19.00),
        array("ISBN" => $numero++, "titulo" => "LOS INOCENTES", "descripcion" => "Una profunda exploración de los eventos históricos que cambiaron el curso de la humanidad.", "categoria" => "historia", "editorial" => "DESTINO", "foto" => "./img2/i6.webp", "precio" => 20.00),
        array("ISBN" => $numero++, "titulo" => "LA ROSA Y LAS ESPINAS", "descripcion" => "Una mirada cautivadora al mundo de la ciencia y la naturaleza a través de la rosa.", "categoria" => "ciencia", "editorial" => "LA ESFERA DE LOS LIBROS", "foto" => "./img2/i7.webp", "precio" => 19.00),
    );

    echo '<div class="row">';
    
    echo '<h3>novela</h3>';
    foreach($libros as $valor) {

        if ($valor["categoria"] == "novela"){
            echo '
                    <div class="card mb-4" style="width: 18rem;">
                        <img src="'.$valor["foto"].'" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">'.$valor["titulo"].'</h6>
                            <p class="card-text">'.$valor["precio"].'€</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprar">
                                Comprar
                            </button>

                        </div>
                    </div>
            ';

        }
    }

    echo '<h3>ciencia</h3>';
    foreach($libros as $valor) {
          
        if ($valor["categoria"] == "ciencia"){
            echo '
                    <div class="card mb-4" style="width: 18rem;">
                        <img src="'.$valor["foto"].'" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">'.$valor["titulo"].'</h6>
                            <p class="card-text">'.$valor["precio"].'€</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprar">
                                Comprar
                            </button>

                        </div>
                    </div>
            ';
        }
    }

    echo '<h3>scifi</h3>';
    foreach($libros as $valor) {
          
        if ($valor["categoria"] == "scifi"){
            echo '
                    <div class="card mb-4" style="width: 18rem;">
                        <img src="'.$valor["foto"].'" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">'.$valor["titulo"].'</h6>
                            <p class="card-text">'.$valor["precio"].'€</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprar">
                                Comprar
                            </button>

                        </div>
                    </div>
            ';
        }
    }

    echo '<h3>deporte</h3>';
    foreach($libros as $valor) {
          
        if ($valor["categoria"] == "deporte"){
            echo '
                    <div class="card mb-4" style="width: 18rem;">
                        <img src="'.$valor["foto"].'" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">'.$valor["titulo"].'</h6>
                            <p class="card-text">'.$valor["precio"].'€</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprar">
                                Comprar
                            </button>

                        </div>
                    </div>
            ';
        }
    }

    echo '<h3>cocina</h3>';
    foreach($libros as $valor) {
          
        if ($valor["categoria"] == "cocina"){

        echo '
                <div class="card mb-4" style="width: 18rem;">
                    <img src="'.$valor["foto"].'" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">'.$valor["titulo"].'</h6>
                        <p class="card-text">'.$valor["precio"].'€</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprar">
                            Comprar
                        </button>

                    </div>
                </div>
        ';
        }
    }
    
    echo '<h3>historia</h3>';
    foreach($libros as $valor) {
          
        if ($valor["categoria"] == "historia"){

        echo '
                <div class="card mb-4" style="width: 18rem;">
                    <img src="'.$valor["foto"].'" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">'.$valor["titulo"].'</h6>
                        <p class="card-text">'.$valor["precio"].'€</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprar">
                            Comprar
                        </button>

                    </div>
                </div>
        ';
        }
    }


    echo '</div>';

?>

</main>
