<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$altura = 15;

// Pirámide
// Declaramos bucle damos el valor de asteriscos que se van a imprimir.
for ($i = $altura; $i > 0; $i--) {
    // Imprimimos
    for ($x = $i; $x > 0; $x--) {
        echo "*";
    }
    echo "<br>";
}
