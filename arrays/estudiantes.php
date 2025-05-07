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
    
    echo "<h2>La edad de Maria es: " . $estudiantes[1]['edad'] . "</h2>";

    echo "<h2>La segunda nota de Carlos es " . $estudiantes[2]['notas'][1] . ".</h2>";

    foreach($estudiantes as $estudiante){
        echo $estudiante['nombre'] . "<br>";
    
    }

    $notasLaura = $estudiantes[3]["notas"];
    
    $mediaNotasLaura = round(array_sum($notasLaura) / count($notasLaura), 2);

    echo "<h2>La nota media de Maria es: $mediaNotasLaura</h2>";
