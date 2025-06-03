<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            background-color: black;
            height: 400px;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_GET['nombre'])){
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        echo "Hola $nombre $apellido";
    }
        
    echo '
        <form method="get" action="form.php">
            <input type="text" name="nombre">
            <input type="text" name="apellido">
            <input type="submit">
        </form>';
?>
<a href="http://localhost:8888/MODULO2/funciones/form.php?nombre=LUIS&apellido=CUBES">Enviar datos</a>
<script>
    
</script>
</body>
</html>

