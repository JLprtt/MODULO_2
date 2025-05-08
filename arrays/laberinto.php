<?php

    $laberinto = array(
           array("#", "#", "#", "#", "#"),
           array("#", ".", ".", ".", "#"),
           array("#", ".", "#", ".", "#"),
           array("#", ".", ".", ".", "#"),
           array("#", "#", "#", "#", "#")
    );

    $i = 0;

    foreach($laberinto as $fila){
        
        foreach($fila as $celda){
            
            if ($celda == ".") $i++;

        }

    }

    echo "La cantidad de puntos es $i.";