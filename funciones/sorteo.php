<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteo</title>
</head>
<body>
    <?php
        $concursantes = array(
            "Darius",
            "Swain",
            "Katarina",
            "Vladimir",
            "LeBlanc",
            "Mordekaiser",
            "Sion",
            "Cassiopeia",
            "Talon",
            "Samira",
            "Draven",
            "Briar",
            "Riven",
            "Kled",
            "Rell",
            "Ambessa",
            "Mel"
        );

        $ganadores = [] ;
        $i = 0;

        function sortear($cantidadConcursantes, $cantidadPremios) {
            
            $ganador = rand(0, $cantidadConcursantes);
            
            global $ganadores, $i;

            if (count($ganadores) == $cantidadPremios) {
                
                return;

            }

            if (!in_array($ganador, $ganadores)) {
                
                array_push($ganadores, $ganador);
                $i++;                

            }

            sortear($cantidadConcursantes, $cantidadPremios);

        }

        sortear(count($concursantes)-1, 3);

        /*echo "<p>Fortaleza: $concursantes[$ganadores[0]]</p>";
        echo "<p>Vision: $concursantes[1]</p>";
        echo "<p>Astucia: $concursantes[2]</p>";*/

        /*for ($i; $i < count($ganadores); $i++) { 

            $trifarix;

            if ($i == 0) $trifarix = 'Fortaleza';
            if ($i == 1) $trifarix = 'Visión';
            if ($i == 2) $trifarix = 'Astucia';
            
            echo
        }*/

        $x = 1;

        foreach ($ganadores as $ganador) {

            $trifarix = '';
            global $x;

            if ($x == 1) {$trifarix = 'Fortaleza';}
            if ($x == 2) {$trifarix = 'Visión';}
            if ($x == 3) {$trifarix = 'Astucia';}

            echo "<p>$trifarix: $concursantes[$ganador]</p>";

            $x++;
        }
    ?>
</body>
</html>