<?php

//inicio de sesión
session_start();

//adjunción de clase
require 'clase.php';

//declaración de variables
$nombreErr = $emailErr = $empleoErr = $tituloErr = $comentarioErr = "";
$nombre = $email = $empleo = $titulo = $comentario = "";

//validaciones
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (empty($_POST["nombre"])) {

        $nombreErr = "* Tienes que introducir un nombre<br>";

    } else {
        
        $nombre = test_input($_POST["nombre"]);
        
        if (!preg_match("/^[a-zA-Z-' ]*$/", $nombre)) {
            $nombreErr = "* Introduce solo letras mayúsculas o minúsculas<br>";
        }
    }
    
    if (empty($_POST["email"])) {
        
        $emailErr = "* Tienes que introducir un email<br>";

    } else {

        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "* Tienes que introducir un email válido<br>";
        }
    }

    if (empty($_POST["empleo"])) {

        $empleoErr = "* Tienes que introducir un empleo<br>";

    } else {

        $empleo = test_input($_POST["empleo"]);

        if (!preg_match("/^[a-zA-Z-' ]*$/", $empleo)) {
            $empleoErr = "* Introduce solo letras mayúsculas o minúsculas<br>";
        }
    }

    if (empty($_POST["titulo"])) {

        $tituloErr = "* Tienes que introducir un titulo<br>";

    } else {

        $titulo = test_input($_POST["titulo"]);

        if (!preg_match("/^[a-zA-Z-' ]*$/", $titulo)) {
            $tituloErr = "* Introduce solo letras mayúsculas o minúsculas<br>";
        }
    }

    if (empty($_POST["comentario"]) || !strlen($_POST['comentario']) > 0) {
        
        $comentarioErr = "* Tienes que introducir algún comentario<br>";

    } else {
        
        $comentario = test_input($_POST["comentario"]);

    }

    //si se ha validado correctamente acceso a los datos
    if(!empty($_POST["nombre"] && !empty($_POST["empleo"])) && !empty($_POST["titulo"]) && !empty($_POST["comentario"])) {

        $usuario = new Usuario($_POST["nombre"], $_POST["email"], $_POST["empleo"], $_POST['titulo'], $_POST["comentario"]);

        echo $usuario->getNombre();
        echo $usuario->getEmail();
        echo $usuario->getEmpleo();
        echo $usuario->getTitulo();
        echo $usuario->getComentario();
    }
}

//función de validación
function test_input($data){
    
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
   
    return $data;
}

/*
$nombreErr = $emailErr = $empleoErr = $tituloErr = $comentarioErr = "";
$nombre = $email = $empleo = $titulo = $comentario = "";*/

/*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    /*echo 'Hola mundo';
    if(empty($_POST["nombre"])) {
        echo $nombreErr = "Introduzca un nombre";
    } else { 
        //$nombre = $_POST["nombre"]; 
        $nombre = new Usuario($_POST["nombre"], $_POST["email"], $_POST["empleo"], $_POST['titulo'], $_POST["comentario"]);
        echo $nombre->getNombre(); 
    }
    /*if(empty($_POST["email"])) {
        echo $emailErr = "Introduzca un email";
    } else { $email = $_POST["email"]; echo "$email<br>"; }
    if(empty($_POST["empleo"])) {
        echo $empleoErr = "Introduzca un empleo";
    } else { $empleo = $_POST["empleo"]; echo "$empleo<br>"; }
    if(empty($_POST["titulo"])) {
        echo $tituloErr = "Introduzca una titulación";
    } else { $titulo = $_POST["titulo"]; echo "$titulo<br>"; }
    if(empty($_POST["comentario"])) {
        echo $comentarioErr = "Introduzca un comentario";
    } else { $comentario = $_POST["comentario"]; echo "$comentario<br>"; }*/

    /*if(empty($_POST["nombre"])) {
        echo $nombreErr = "Introduzca un nombre";
    }
    if(empty($_POST["email"])) {
        echo $emailErr = "Introduzca un email";
    }
    if(empty($_POST["empleo"])) {
        echo $empleoErr = "Introduzca un empleo";
    } 
    if(empty($_POST["titulo"])) {
        echo $tituloErr = "Introduzca una titulación";
    }
    if(empty($_POST["comentario"])) {
        echo $comentarioErr = "Introduzca un comentario";
    }

    if(!empty($_POST["nombre"] && !empty($_POST["empleo"])) && !empty($_POST["titulo"]) && !empty($_POST["comentario"])) {

        //$random = rand(0001, 9999);
        $usuario = new Usuario($_POST["nombre"], $_POST["email"], $_POST["empleo"], $_POST['titulo'], $_POST["comentario"]);

        echo $usuario->getNombre();
        echo $usuario->getEmail();
        echo $usuario->getEmpleo();
        echo $usuario->getTitulo();
        echo $usuario->getComentario();
        
    }
} else {
    echo 'Error';
}*/