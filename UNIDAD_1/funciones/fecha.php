<?php

$fecha = new DateTime();
$fmt = new IntlDateFormatter('es_ES', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
echo $fmt->format($fecha); // Ejemplo: "martes, 14 de mayo de 2025"
