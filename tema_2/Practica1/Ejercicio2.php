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
    
    foreach($libros as $valor) {
        echo '<div class="col">';   

        echo $valor["categoria"];
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

        echo '</div>';
    }

    echo '</div>';




    
    /*


    //CREAMOS UN DIV PARA QUE TODO ESTE ORGANIZADO CON ROW
    echo '<div class="row gy-5">';

    
    
    //CREAMOS UN FOREACH PARA RECORRER EL ARRAY 
    foreach ($libros as $valor){
        echo '<div class="col">';
        
        //MIRAMOS A VER SI SON DE LA CATEGORIA CORRECTA CON UN IF
        if ($valor["categoria"] == "ciencia") {

            //PRINTEAMOS POR PANTALLA LA CARD CON SU RESPECTIVA INFORMACION
            echo '<br><br>  
                <div class="card col mb-4" style="width: 18rem;">
                    <img src=" '. $valor["foto"] .'" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">' . $valor["descripcion"] . '</p>
                        <h5 class="card-title">' . $valor["titulo"] . '</h5>
                        <p class="card-text .text-danger">' . $valor["precio"] . '€</p>
                    </div>
                </div>
            ';
        }

        echo ' </div>';
    }

    echo "Novela";
    //CREAMOS UN FOREACH PARA RECORRER EL ARRAY 
    foreach ($libros as $valor){
        echo '<div class="col">';

        //MIRAMOS A VER SI SON DE LA CATEGORIA CORRECTA CON UN IF
        if ($valor["categoria"] == "novela") {

            //PRINTEAMOS POR PANTALLA LA CARD CON SU RESPECTIVA INFORMACION
            echo '
                <div class="card col mb-4" style="width: 18rem;">
                    <img src=" '. $valor["foto"] .'" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">' . $valor["descripcion"] . '</p>
                        <h5 class="card-title">' . $valor["titulo"] . '</h5>
                        <p class="card-text .text-danger">' . $valor["precio"] . '€</p>
                    </div>
                </div>
            ';
        }
        
        echo ' </div>';
    }

    echo "scifi";
    //CREAMOS UN FOREACH PARA RECORRER EL ARRAY 
    foreach ($libros as $valor){
        echo '<div class="col">';

        //MIRAMOS A VER SI SON DE LA CATEGORIA CORRECTA CON UN IF
        if ($valor["categoria"] == "scifi") {

            //PRINTEAMOS POR PANTALLA LA CARD CON SU RESPECTIVA INFORMACION
            echo '
                <div class="card col mb-4" style="width: 18rem;">
                    <img src=" '. $valor["foto"] .'" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">' . $valor["descripcion"] . '</p>
                        <h5 class="card-title">' . $valor["titulo"] . '</h5>
                        <p class="card-text .text-danger">' . $valor["precio"] . '€</p>
                    </div>
                </div>
            ';
        }
        
        echo ' </div>';
    }

    echo "cocina";
    //CREAMOS UN FOREACH PARA RECORRER EL ARRAY 
    foreach ($libros as $valor){
        echo '<div class="col">';

        //MIRAMOS A VER SI SON DE LA CATEGORIA CORRECTA CON UN IF
        if ($valor["categoria"] == "cocina") {

            //PRINTEAMOS POR PANTALLA LA CARD CON SU RESPECTIVA INFORMACION
            echo '
                <div class="card col mb-4" style="width: 18rem;">
                    <img src=" '. $valor["foto"] .'" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">' . $valor["descripcion"] . '</p>
                        <h5 class="card-title">' . $valor["titulo"] . '</h5>
                        <p class="card-text .text-danger">' . $valor["precio"] . '€</p>
                    </div>
                </div>
            ';
        }
        
        echo ' </div>';
    }

    echo "deporte";
    //CREAMOS UN FOREACH PARA RECORRER EL ARRAY 
    foreach ($libros as $valor){
        echo '<div class="col col-6">';

        //MIRAMOS A VER SI SON DE LA CATEGORIA CORRECTA CON UN IF
        if ($valor["categoria"] == "deporte") {

            //PRINTEAMOS POR PANTALLA LA CARD CON SU RESPECTIVA INFORMACION
            echo '
                <div class="card col mb-4" style="width: 18rem;">
                    <img src=" '. $valor["foto"] .'" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">' . $valor["descripcion"] . '</p>
                        <h5 class="card-title">' . $valor["titulo"] . '</h5>
                        <p class="card-text .text-danger">' . $valor["precio"] . '€</p>
                    </div>
                </div>
            ';
        }
        
        echo ' </div>';
    }

    echo "historia <br>";
    //CREAMOS UN FOREACH PARA RECORRER EL ARRAY 
    foreach ($libros as $valor){
        echo '<div class="col col">';

        //MIRAMOS A VER SI SON DE LA CATEGORIA CORRECTA CON UN IF
        if ($valor["categoria"] == "historia") {

            //PRINTEAMOS POR PANTALLA LA CARD CON SU RESPECTIVA INFORMACION
            echo '
                <div class="card col mb-4" style="width: 18rem;">
                    <img src=" '. $valor["foto"] .'" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">' . $valor["descripcion"] . '</p>
                        <h5 class="card-title">' . $valor["titulo"] . '</h5>
                        <p class="card-text .text-danger">' . $valor["precio"] . '€</p>
                    </div>
                </div>
            ';
        }
        
        echo ' </div>';
    }


    echo '</div>'

    */

?>

</main>
