<?php
 
$archivos = scandir('.');
 
foreach($archivos as $archivo){
    if (str_ends_with(".php", $archivo) != $archivo)
    echo "<br><a href='$archivo'>$archivo</a>";
}
exit;