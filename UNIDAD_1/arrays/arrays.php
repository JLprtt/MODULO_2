<?php

    // Crear array
    $REGIONES = array("NOXUS", "ZAUN", "FRELJORD", "TARGON");
    // accedemos a “ZAUN”
    echo $REGIONES[1] . "<br>";
    //modificamos ZAUN por SHURIMA
    $REGIONES[1] = "SHURIMA"; 
    // Añadir
    $REGIONES[] = "ZAUN"; //añadimos ZAUN al final
    // eliminamos “NOXUS”
    array_splice($REGIONES, 3,1);

    print_r($REGIONES);
?>
