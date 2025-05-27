<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteo Rand, bucles y manejo archivos</title>
    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            background: linear-gradient(to right, #f9f9f9, #e0eafc);
            padding: 40px;
            color: #333;
            text-align: center;
        }

        h1 {
            color: #005288;
            margin-top: 40px;
        }

        form {
            background-color: #fff;
            display: inline-block;
            padding: 20px 30px;
            margin: 20px auto;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 82, 136, 0.15);
            text-align: left;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 1em;
        }

        input[type="submit"] {
            background-color: #005288;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-size: 1em;
            cursor: pointer;
            transition: background 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0071b3;
        }

        ul {
            list-style: none;
            padding: 0;
            max-width: 500px;
            margin: 20px auto;
            text-align: left;
        }

        li {
            background: #fff;
            margin-bottom: 10px;
            padding: 12px 18px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 82, 136, 0.1);
            font-weight: 500;
            font-size: 1.05em;
        }
    </style>
</head>

<body>
    <form action="index.php" method="post">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre del participante"><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    define("ARCHIVO", "lista_concursantes.txt");

    function sorteo($participantes, $cantidadGanadores)
    {
        $ganadoresArray = [];
        $countParticipantes = count($participantes);
        while (count($ganadoresArray) < $cantidadGanadores) {
            $ganador = rand(0, $countParticipantes - 1);
            if (in_array($ganador, $ganadoresArray))
                continue;
            $ganadoresArray[] = $ganador;
        }
        return $ganadoresArray;
    }
    function obtenerParticipantes()
    {
        $contArchivo = file_get_contents(ARCHIVO);
        $participantes = explode(',', $contArchivo);
        // Eliminar el último elemento, porque la lista acaba en ,
        // maria,paco,nuria, y entonces añade un elemento vacío al funal del array.
        // Entonces lo eliminamos. 
        array_pop($participantes);
        return $participantes;
    }
// Vaciamos el contenido del archivo
    function limpiarLista(){
        try{
            file_put_contents(ARCHIVO, "" );
            return true;
        }catch (Exception $e) {
            return false;
        }
    }
    // Añadimos la lógica para escribir el archivo y leerlo
    // Hacer explode del contenido del archivo para añadir el resultado a $participantes
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Si recibimos "nombre" es que nos envían el nombre del participante desde el formulario correspondiente.
        // Lo añadimos a,archivo seguidop de , y listamos los participantes.
        if (!empty($_POST["nombre"])) {
            $texto = $_POST["nombre"] . ',';
            try {
                // abrir/crear archivo para añadir contenido sin sobreescribirlo. 
                $archivo = fopen(ARCHIVO, "a");
                // Escribimos en él
                fwrite($archivo, $texto);
                // cerramos el archivo.
                fclose($archivo);
                // obtenemos el contenido del archivo
                $participantes = obtenerParticipantes();
                // Lo cerramos
                // Listanmos los participantes
                echo "<h1>Lista de participantes</h1>";
                echo "<ul>";
                foreach ($participantes as $participante) {
                    echo "<li>$participante</li>";
                }
                echo "</ul>";
                if (count($participantes) > 2) { 
                    // Si hay más de 3 participantes rompemos el php para escribir el formulario para sortear.                 
                     ?>
                    <form action="index.php" method="post">
                        <input type="number" name="ganadores" id="ganadores" placeholder="Número de ganadores" required><br>
                        <input type="submit" value="Sortear">
                        
                    </form>
                    <!-- Añadimos también el formulario para limpiar la lista 
                    -->
                    <form action="index.php" method="post">
                        <input type="hidden" name="limpiarLista" id="limpiarLista" value="1"><br>
                        <input type="submit" value="Limpiar Lista">
                    </form>
                <?php
                }
                //  print_r($participantes);
            } catch (Exception $e) {
                echo "<h1>No se ha podido crear el archivo - " . $e->getMessage() . "</h1>";
            }

            // Si recibimos "ganadores" es que nos envían la cantidad de ganadores desde
            // el formulario correspondiente. Procedemos entonces al sorteo para esa cantidad de posibles ganadores. 
        } else if (!empty($_POST["ganadores"])) {
            $cantGanadores = $_POST["ganadores"];

            $participantes = obtenerParticipantes();
            // Ejecutamos la funcion sorteo() declarada arriba, enviándole 
            // los parámetros necesarios: lista (array) y cantidad 
            $indicesGanadores = sorteo($participantes, $cantGanadores);
            echo "<h1>Lista de ganadores</h1>
                <ul>";
            foreach ($indicesGanadores as $indice) {
                echo "<li>$participantes[$indice]</li>";
            }
            echo "</ul>";?>

                    <form action="index.php" method="post">
                        <input type="hidden" name="limpiarLista" id="limpiarLista" value="1"><br>
                        <input type="submit" value="Limpiar Lista">
                        
                    </form>

            <?php

        } 

        // Si reciimos desde el form de limpiarLista, llamamos a la función limpiarLista 
        // que sobreescribe el archivo con "" (nada)
        else if (!empty($_POST["limpiarLista"]) && $_POST["limpiarLista"] == 1) {
            if (limpiarLista()){
                echo "<h1>Lista limpia</h1>";
                exit;
            }
            echo "<h1>No se ha podido limpiar la lista</h1>";
            
            
        }
        // Sino se `produce ninguno de los casos, es han enviado algún formulario, pero sin datos, 
        // o sin los datos esperados. 
        else {
            echo "<h1>Por favor, escribe algo en el campo de texto</h1>";
        }
    }

    ?>
</body>

</html>