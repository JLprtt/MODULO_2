<?php

// Ejercicio funciones y globales
    $nombre="Pablo";
    $apellido="Picapiedra";

    function calculaEdad(){
        $edad = 36;
        return $edad;
    }
   function escribe(){
       global $nombre, $apellido;
       echo "<h1>Hola $nombre $apellido</h1>
       <h2>Tu edad: " . calculaEdad() . "<h2>";   
   }
   escribe();
   exit;
   
   