<?php

function saludar($nombre, $hora) {
    if ($hora < 13 && $hora > 4) return "<h3>Buenos días, $nombre.</h3><br>";
    if ($hora < 20 && $hora > 12) return "<h3>Buenas tardes, $nombre.</h3><br>";
    if ($hora < 5 || $hora > 19) return "<h3>Buenas noches, $nombre.</h3><br>";
    if ($hora >= 25) return "<h3>Ryze? Zilean? Ekko?</h3><br>";
}

echo saludar("Darius", 1);
echo saludar("Draven", 2);
echo saludar("Swain", 3);
echo saludar("Katarina", 5);
echo saludar("Talon", 6);
echo saludar("Cassiopeia", 7);
echo saludar("Sion", 8);
echo saludar("Riven", 10);
echo saludar("LeBlanc", 11);
echo saludar("Vladimir", 13);
echo saludar("Mordekaiser", 14);
echo saludar("Samira", 16);
echo saludar("Kled", 17);
echo saludar("Rell", 19);
echo saludar("Briar", 20);
echo saludar("Ambessa", 22);
echo saludar("Mel Medarda", 24);

exit;