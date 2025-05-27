<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario básico</title>
</head>

<body>
    <form id="form" action="hola_nombre.php" method="POST">
        Name: <input type="text" name="name" value=""><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <?php
    // Si recibimos parámetros por POST, saludamos al usuario 
    if ($_SERVER['REQUEST_METHOD'] == "POST") { ?>
        Welcome
        Your name is:

        <?php 
        // Recogemos el valor del campo "name" del formulario
        echo $_POST["name"] ?><br>
        Your email address is:
        <?php 
        // Recogemos el valor del campo "email" del formulario
        echo $_POST["email"]; ?>
    <?php } else {
        echo "Cubre el formulario";
    }
    ?>
</body>

</html>