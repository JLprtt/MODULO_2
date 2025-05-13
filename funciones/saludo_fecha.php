<?php

$hora = date('H');

$nombres = [
    "Darius",
    "Swain",
    "Katarina",
    "Vladimir",
    "LeBlanc",
    "Mordekaiser",
    "Sion",
    "Cassiopeia",
    "Talon",
    "Samira",
    "Draven",
    "Briar",
    "Riven",
    "Kled",
    "Rell",
    "Ambessa",
    "Mel"
];

$usuarioID = rand(0, count($nombres)-1);

$usuario = $nombres[$usuarioID];

function saludar($nombre, $hora) {
    if ($hora < 13 && $hora > 04) return "<h3>Buenos días, $nombre.</h3><br>";
    if ($hora < 20 && $hora > 12) return "<h3>Buenas tardes, $nombre.</h3><br>";
    if ($hora < 05 || $hora > 19) return "<h3>Buenas noches, $nombre.</h3><br>";
    if ($hora >= 25) return "<h3>Ryze? Zilean? Ekko?</h3><br>";
}

//if ($hora == 18) {echo "$nombre, $hora";}

echo saludar($usuario, $hora);

echo "date('d/m/Y') date('H:i:s')";
