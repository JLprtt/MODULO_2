<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        ForEach Nombres
    </title>
</head>
<body>
    <?php
        $nombres = array("Pedro", "Angel", "María", "Paula");
        foreach($nombres as $nombre){
            // Función para pasar a minúsculas
    
            if (strtolower($nombre)[0] == "p"){
                echo "<br>Bienvenid@ $nombre";
            }
        }
        // Con bucle for()
    ?>
    <h1>Lo mismo con bucle for()</h1>
    <?php
        for ($i = 0; $i < count($nombres); $i++){
            $nombre = $nombres[$i];
            if (strtolower($nombre[0]) == "p"){
                echo "<h2>Bienvenido $nombre</h2>";
            } 
        }
    ?>
</body>
</html>