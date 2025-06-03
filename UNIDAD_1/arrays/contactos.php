<?php

$contactos = [
    [
        "nombre" => "William",
        "teléfono" => "+44 7700 900123",
        "email" => "william@email.com"
    ],
    [
        "nombre" => "Charlotte",
        "teléfono" => "+44 161 496 0000",
        "email" => "charlotte@email.com"
    ],
    [
        "nombre" => "Thomas",
        "teléfono" => "+44 207 946 0999",
        "email" => "thomas@email.com"
    ]
];

function MostrarContactos($contactos) {
    for ($i = 0; $i < count($contactos); $i++) {
        $contactoNombre = $contactos[$i]["nombre"];
        $contactoTel = $contactos[$i]["teléfono"];
        $contactoEmail = $contactos[$i]["email"];
    
        echo $contactoNombre . ", " . $contactoTel . ", " . $contactoEmail . "<br>";
    };
};

MostrarContactos($contactos);

echo "<hr>";

/*echo $contactos[0]["nombre"].", " . $contactos[0]["teléfono"] . ", " . $contactos[0]["email"] . "<br>";
echo $contactos[1]["nombre"].", " . $contactos[1]["teléfono"] . ", " . $contactos[1]["email"] . "<br>";
echo $contactos[2]["nombre"].", " . $contactos[2]["teléfono"] . ", " . $contactos[2]["email"] . "<br><hr>";*/

$contactos[] = ["nombre" => "Elisabeth","teléfono" => "+44 113 496 0123","email" => "elizabeth@email.com"];

$contactos[0]["teléfono"] = "+44 7733 777333";

//print_r($contactos);

MostrarContactos($contactos);

/*for ($x = 0; $x < count($contactos); $x++) {
    $contactoNombre = $contactos[$x]["nombre"];
    $contactoTel = $contactos[$x]["teléfono"];
    $contactoEmail = $contactos[$x]["email"];

    echo $contactoNombre . ", " . $contactoTel . ", " . $contactoEmail . "<br>";
};*/