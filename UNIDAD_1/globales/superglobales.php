<?php
    
    //Las variables globales "son arrays"(?)
    foreach ($_SERVER as $key => $value) {
        
        echo "<b>$key:</b> $value <br>";
    
    }