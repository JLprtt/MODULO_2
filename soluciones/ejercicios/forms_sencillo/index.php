<?php


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$archivos = scandir('.');

foreach($archivos as $archivo){

    echo "<br><a href='$archivo'>$archivo</a>";
}
exit;
