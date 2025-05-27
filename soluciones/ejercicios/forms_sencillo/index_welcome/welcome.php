<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptor de form</title>
</head>
<body>
    <?php
    function redireccionar(){
        sleep(1);
        header("location: index.html");
        exit;
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        echo "Bienvenido $nombre te contactaremos a través del mail $email";
 
    }else{
        redireccionar();
    }
    ?>
    <h2>Muchas gracias</h2>
</body>
</html>