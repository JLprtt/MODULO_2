<?php




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario clases</title>
    <style>
        .error {
        color: #8B0000; /* Rojo oscuro */
        font-size: 14px;
        /*margin-left: 10px;*/
        font-style: italic;
    }
    </style>
</head>
<body>
    <h1>Introduzca sus datos</h1>
    <form action="receptor.php" method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>"><br>
        <span class="error"><?php echo $nombreErr; ?></span><br>
        <label for="email">Email:</label><br>
        <input type="mail" name="email" id="email"><br>
        <span class="error"><?php echo $emailErr; ?></span><br>
        <label for="empleo">Empleo:</label><br>
        <input type="text" name="empleo" id="empleo"><br>
        <span class="error"><?php echo $empleoErr; ?></span><br>
        <label for="titulo">Titulación:</label><br>
        <input type="titulo" name="titulo" id="titulo"><br>
        <span class="error"><?php echo $tituloErr; ?></span><br>
        <label for="comentario">Comentario:</label><br>
        <textarea name="comentario" id="comentario"></textarea><br>
        <span class="error"><?php echo $comentarioErr; ?></span><br>
        <input type="submit" value="Enviar">
    </form>

    <?php

    //adjunto la clase
    
    ?>
</body>
</html>