<?php

$nombre = "Jericho";
$apellido = "Swain";
$region = "Noxus";

function escribe() {
    global $nombre, $apellido, $region;

    echo "<h1> Hola $nombre $apellido</h1>
        <h2>Perteneces a la región de $region</h2>";
    
    exit;
}

escribe();
exit;