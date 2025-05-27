<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Crear array
$colores = ["rojo", "verde", "azul"];
// accedemos a “verde”
echo $colores[1] . "<br>";
//modificamos verde por amarillo
$colores[1] = "amarillo"; 
// Añadir
$colores[] = "verde"; //añadimos verde al final
// eliminamos “rojo”
array_splice($colores, 0,1);
print_r($colores);