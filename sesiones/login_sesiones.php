<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login sesiones</title>
</head>
<body>
    <h1>Login</h1>
    
    <form action="contenido_sesiones.php" method="POST">
        <label for="usuarioId">Nombre:</label>
        <input type="text" name="usuarioId" id="usuarioId">
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password">
        <br><br>
        <input type="submit">
    </form>

    <?php

    session_start();
    //session_destroy();

    if (isset($_GET['logout'])) {
        
        session_destroy();
        header("Location: login_sesiones.php");

        exit();

    }

    if (isset($_SESSION['error'])) {
        
        echo "<p style='color:red;'>" . $_SESSION['error']. "</p>";
        unset($_SESSION['error']);

    }
    ?>
</body>
</html>