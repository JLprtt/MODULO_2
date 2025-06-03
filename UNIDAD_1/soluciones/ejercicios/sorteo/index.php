<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteo PHP</title>
</head>
<body>
    <h1>SORTEO</h1>
    <?php
        $cantidadPremios = 3;

        $concursantes = [
            'Pedro',
            'Ana',
            'María',
            'Alfredo',
            'Amelia',
            'Roi',
            'Roque'
        ];

        $ganadores = [];

        function sortear($cantidadConcursantes, $cantidadPremios){
            global $ganadores;
            if (count($ganadores) == $cantidadPremios) return;

            $ganador = rand(0, $cantidadConcursantes);
            if (!in_array($ganador, $ganadores)){
                array_push($ganadores, $ganador);
            }
            sortear($cantidadConcursantes, $cantidadPremios);
        }

        sortear(count($concursantes)-1, $cantidadPremios);
        foreach($ganadores as $ganador){
            echo "<h3> Ganador:". $concursantes[$ganador]  ."</h3>";
        }
    ?>

    <?php
        $ganadores = array_rand($concursantes,3);
        foreach($ganadores as $ganador){
            echo "<h3> Ganador:". $concursantes[$ganador]  ."</h3>";
        }
    ?>
</body>
</html>