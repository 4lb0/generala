<?php

// En PHP tenemos que cargar la definición de la clase,
// lo hacemos con un require_once, para que lo incluya
// una sola vez.

require_once 'Dado.php';

// Creamos una instancia de la clase Dado en la variable
// $dado y luego le establecemos la cantidad de caras en 6.

$dado = new Dado();
$dado->caras = 6;

for ($i = 0; $i < 20; $i++) {

    // Llamamos al método tirar del objeto $dado.
    // Establecemos el resultado de tirar en $valor.

    $valor = $dado->tirar();

    // Imprimimos en pantalla el número de fila y el valor.

    echo "$i: " . $valor . "<br />";

}
