<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validaciones</title>
</head>
<body>
    <?php
        function redireccionar() {
            echo "<h1>Cubra todos los datos del formulario.</h1>";
            sleep(3);
            header("location : validaciones.html");
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if (!isset($_POST['nombre']) || !isset($_POST['email']) || $_POST['nombre'] == '' || $_POST['email'] == '') {
                
                redireccionar();
                
            }

            $nombre = $_POST['nombre'];
            $email = $_POST['email'];

            echo "Bienvenido $nombre, le contactaremos a través del mail $email";


        } else {
            
            redireccionar();

        }
    ?>
</body>
</html>