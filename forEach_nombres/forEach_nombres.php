<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each</title>
</head>

<body>
    <?php

        $nombres = array(
            "Darius",
            "Swain",
            "Katarina",
            "Vladimir",
            "LeBlanc",
            "Mordekaiser",
            "Sion",
            "Cassiopeia",
            "Talon",
            "Samira"
        );

        foreach($nombres as $nombre){
            $nombresMinus = strtolower($nombre);
            if ($nombresMinus[0] == "s") {
                echo "<br>Bienvenid@ $nombre";
            }
        }
    
    ?>
    
    <h1>Lo mismo con bucle for()</h1>

    <?php

        for ($i = 0; $i < count($nombres); $i++) {
            $nombre = $nombres[$i];

            if (strtolower($nombre) [0] == "s") {
                echo "<br>Bienvenid@ $nombre";
            }
        }

    ?>
</body>

</html>