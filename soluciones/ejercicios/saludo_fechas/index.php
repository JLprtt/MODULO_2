<?php
function saludar($nombre, $hora){
    if ($hora < 12) return "<h2>Buenos días $nombre</h2>";
    if ($hora < 18) return "<h2>Buans tardes $nombre</h2>";
    return "<h2>Buenas noches $nombre</h2>";
}
date_default_timezone_set('Europe/Madrid');
echo date_default_timezone_get();
echo saludar("Paco", date('H'));

$fecha = new DateTime();
$fmt = new IntlDateFormatter('es_ES', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
echo $fmt->format($fecha); // Ejemplo: "martes, 14 de mayo de 2025"

echo "<br>Son las: ".date('H:i:s');
echo "<br>En formato 12 h Son las: ".date('h:i:sa');