<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $contenido = $_POST['contenido'];
    $archivo = fopen("archivo$nombre.txt", "w");

    fwrite($archivo, "Nombre: $nombre\nContenido: $contenido");
    fclose($archivo);

}