<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables PHP básico</title>
</head>

<body>
    <?php
    $nombre = "Luis";
    $apellido = "Garcìa";
    $edad = 54;
    $ciudad_natal = "Vigo";
    echo "
            Hola, Me llamo <b>$nombre $apellido</b>,<br>
            Tengo <b>$edad</b> años, <br>
            y soy de <b>$ciudad_natal</b>
        ";
    ?>
    <hr>
    <h1>Variables entre el HTML</h1>
    Hola, me llamo <?php echo $nombre . " " . $apellido; ?><br>
    Tengo <?php echo $edad; ?> años<br>
    y he nacido en <?php echo $ciudad_natal; ?>.
    <hr>

    <?php echo file_get_contents('https://elpais.com'); ?>
</body>

</html>