<?php

session_start();

/*if (isset($_SESSION["usuarioId"])) {
    
    header("Location: contenido_sesiones.php");
    exit();
}*/

define('USUARIO', 'admin');
define('PASSWORD', '1234');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $usuarioId = $_POST['usuarioId'];
    $password = $_POST['password'];

    if ($usuarioId == USUARIO && $password == PASSWORD) {
        
        $_SESSION["usuarioId"] = $usuarioId;

    } else {
        
        $_SESSION['error'] = "Usuario o contraseña incorrecto.";
        header("Location: login_sesiones.php");
        exit();
    }
}

if (isset($_SESSION['usuarioId'])) {

    echo "<h1>Bienvenido, " . $_SESSION['usuarioId'] . "</h1>";
    echo "<a href='login_sesiones.php?logout=true'>Cerrar sesión</a>";

} else {
    
    $_SESSION['error'] = "Debe iniciar sesión.";

    header("Location: login_sesiones.php");
    exit();
}