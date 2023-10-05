<?php 

// PEDIMOS EL DNI
$dni = 00000000;

// BUSCAMOS EL RESTO DE EL NUMERO DEL DNI DIVIDIENDO POR 23
$restoDni = $dni / 23;

// HACEMOS UN ARRAY DE LAS POSIBLES LETRAS PARA UN DNI
$letrasSolucion = array ('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E');

// SACAMOS LA LETRA DEL DNI Y LA PONEMOS EN UNA VARIABLE
$letra = $letrasSolucion[$restoDni];

// IMPRIMIMOS POR PANTALLA LA SOLUCION
echo "El DNI tiene como letra" . $letra . " y se queda " . $dni . " - " .$letra;

?>