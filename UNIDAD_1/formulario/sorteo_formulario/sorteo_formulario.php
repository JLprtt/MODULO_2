<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteo</title>
    <style>
        /* Estilo para los mensajes de error */
        .error {
            color: #8B0000;
            /* Rojo oscuro */
            font-size: 14px;
            margin-left: 10px;
            font-style: italic;
        }

        /* Estilo de los inputs */
        input[type="text"],
        input[type="email"],
        input[type="url"],
        textarea {
            width: 100%;
            padding: 12px;
            /* Aumenté el padding */
            margin: 10px -10px;
            /* Aumenté el margen */
            border: 1px solid #555555;
            /* Gris oscuro */
            border-radius: 4px;
            background-color: #2f2f2f;
            /* Gris oscuro para fondo de inputs */
            color: white;
            /* Blanco para el texto */
        }

        /* Estilo para el botón de enviar */
        input[type="submit"] {
            background-color: #8B0000;
            /* Rojo oscuro */
            color: white;
            padding: 12px 25px;
            /* Aumenté el padding */
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 15px;
            /* Añadí margen superior */
        }

        input[type="submit"]:hover {
            background-color: #B22222;
            /* Rojo más claro cuando se pasa el ratón */
        }

        /* Estilo del fondo de la página */
        body {
            background-color: #121212;
            /* Fondo negro */
            color: #d3d3d3;
            /* Texto gris claro */
            font-family: Arial, sans-serif;
        }

        /* Estilo para el formulario */
        #participantesForm {
            background-color: #333333;
            /* Gris oscuro */
            padding: 30px;
            /* Aumenté el padding */
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            /* Aumenté la sombra */
            width: 350px;
            /* Aumenté el ancho del formulario */
            margin: 0 auto;
        }

        /* Estilo para los labels */
        label {
            color: #d3d3d3;
            /* Gris claro */
            font-size: 16px;
            /* Aumenté el tamaño de la fuente */
            font-weight: bold;
            margin-bottom: 5px;
            /* Añadí un margen inferior */
            display: inline-block;
            /* Aseguro que el label esté encima del input */
        }

        /* Estilo para los checkboxes */
        input[type="checkbox"] {
            margin-right: 10px;
        }

        /* Estilo de los inputs de checkbox */
        input[type="checkbox"]+label {
            color: #d3d3d3;
            /* Gris claro */
            font-size: 14px;
        }

        /* Margen entre los checkbox */
        input[type="checkbox"]:not(:last-child) {
            margin-right: 15px;
        }

        /* Estilo para la lista de participantes */
        h1 {
            text-align: center;
            color: #ffffff;
            margin-top: 40px;
            font-size: 24px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            width: 300px;
            margin: 20px auto;
            background-color: #1e1e1e;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }

        li {
            padding: 10px 15px;
            border-bottom: 1px solid #444;
            color: #dcdcdc;
            font-size: 16px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        li:last-child {
            border-bottom: none;
        }

        /* Estilo para el contenedor del número de ganadores */
        div#ganadores-container {
            background-color: #2a2a2a;
            padding: 25px;
            padding-top: 1px;
            border-radius: 8px;
            margin: 30px auto;
            width: 350px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        /* Estilo del título */
        div#ganadores-container h1 {
            color: #ffffff;
            font-size: 20px;
            margin-bottom: 15px;
        }

        /* Estilo del input number */
        div#ganadores-container input[type="number"] {
            width: 80%;
            padding: 10px;
            background-color: #2f2f2f;
            border: 1px solid #555;
            border-radius: 4px;
            color: white;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <form action="sorteo_formulario.php" method="POST" id="participantesForm">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="William">
        <br><br>
        <input type="submit">
    </form>

    <div id="ganadores-container">
        <form action="sorteo_formulario.php" method="POST">
            <h1>Número de ganadores</h1>
            <input type="number" name="cantidadGanadores" id="cantidadGanadores">
            <input type="submit" value="Sortear">
        </form>
    </div>

    <?php
    /*$concursantes = array(
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
        );*/

    $ganadores = [];
    $i = 0;


    function sortear($cantidadConcursantes, $cantidadPremios)
    {

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


    $archivo = __DIR__ . "/lista_participantes.txt";
    $participantes = [];
    $cantidadGanadores = 0;


    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $nombre = $_POST["nombre"];
        global $archivo;
        $lista_participantes = fopen("$archivo", "a");

        if (!empty($nombre)) {

            $texto = $nombre . ",";

            fwrite($lista_participantes, $texto);
            fclose($lista_participantes);

            $participantes = leerParticipantes();

            echo "<h1>Lista de participantes</h1>
            <ul>";
            foreach ($participantes as $participante) {

                echo "<li>$participante</li>";
            }
            echo "</ul>";
        }

        $cantidadGanadores = $_POST["cantidadGanadores"];

        if (!empty($cantidadGanadores) || $cantidadGanadores != 0) {

            echo $cantidadGanadores;
            //sortear(count($participantes) - 1, $cantidadGanadores);
        } else {
            echo "Error al mostrar la cantidad de concursantes.";
        }
    }

    function leerParticipantes()
    {

        global $archivo;
        $lista_participantes = file_get_contents("$archivo");

        $participantes = explode(",", $lista_participantes);

        array_pop($participantes);

        return $participantes;
    }

    /*function imprimirParticipantes($participantes) {
        
        print_r($participantes);
    }*/

    //sortear(count($concursantes)-1, 3);

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

    /*
    $x = 1;

    foreach ($ganadores as $ganador) {

        $trifarix = '';
        global $x;

        if ($x == 1) {
            $trifarix = 'Fortaleza';
        }
        if ($x == 2) {
            $trifarix = 'Visión';
        }
        if ($x == 3) {
            $trifarix = 'Astucia';
        }

        echo "<p>$trifarix: $concursantes[$ganador]</p>";

        $x++;
    }*/
    ?>
</body>

</html>