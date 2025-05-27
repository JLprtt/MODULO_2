<?php

function saludar($nombre, $hora){
    if ($hora < 12) return "<h2>Buenos días $nombre</h2>";
    if ($hora < 18) return "<h2>Buans tardes $nombre</h2>";
    return "<h2>Buenas noches $nombre</h2>";
}

echo saludar('Juan', 9);
echo saludar('Pedro', 16);
echo saludar('Pepa', 21);