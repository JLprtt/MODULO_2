<?php

session_start();

/*if (isset($_SESSION["usuarioId"])) {
    
    header("Location: contenido_sesiones.php");
    exit();
}*/

define('USUARIO', 'admin');
define('PASSWORD', '1234');
define('SOLUTION', '14');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $usuarioId = $_POST['usuarioId'];
    $password = $_POST['password'];
    $captcha = $_POST['captcha'];

    if ($usuarioId == USUARIO && $password == PASSWORD) {
        
        if ($captcha == SOLUTION) {
            
            $_SESSION["usuarioId"] = $usuarioId;

        } else {
            
            $_SESSION['error'] = "Captcha incorrecto";
            header("Location: index.php");
            exit();
        }

    } else {
        
        $_SESSION['error'] = "Usuario o contraseña incorrecto.";
        header("Location: index.php");
        exit();
    }
}

if (isset($_SESSION['usuarioId'])) {

    echo "<div class='tenor-gif-embed' data-postid='7053542450485958682' data-share-method='host' data-aspect-ratio='1.76596' data-width='75%'><a href='https://tenor.com/view/naruto-gif-7053542450485958682'>Naruto GIF</a>from <a href='https://tenor.com/search/naruto-gifs'>Naruto GIFs</a></div> <script type='text/javascript' async src='https://tenor.com/embed.js'></script>";
    echo "<a href='index.php?logout=true'>Cerrar sesión</a>";
    //echo "$firstNum+$secNum=$solution";

} else {
    
    $_SESSION['error'] = "Debe iniciar sesión.";

    header("Location: index.php");
    exit();
}