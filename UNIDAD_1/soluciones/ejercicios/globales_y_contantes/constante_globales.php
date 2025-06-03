<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define('nombre', 'Luis');
        $edad = 35;

        function imprimir(){
            global $edad;
            echo "Hola soy " .nombre. " y tengo $edad años";  
        }
        imprimir();

?>
    
</body>
</html>