<?php
$estudiantes = array(
    array(
        "nombre" => "Juan",
        "edad" => 20,
        "notas" => array(9, 8, 6)
    ),
    array(
        "nombre" => "María",
        "edad" => 22,
        "notas" => array(7, 9, 6)
    ),
    array(
        "nombre" => "Carlos",
        "edad" => 21,
        "notas" => array(8, 9, 7)
    ),
    array(
        "nombre" => "Laura",
        "edad" => 23,
        "notas" => array(6, 8, 9)
    )
);
foreach ($estudiantes as $estudiante) {
    # code...
    echo "<br>Nombre del estudiante:" . $estudiante["nombre"];
}


