<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login sesiones</title>
</head>

<?php

/*$firstNum = rand(1, 100);
$secNum = rand(1, 100);

$solution = $firstNum + $secNum;*/
?>

<body>
    <h1>Login</h1>

    <form action="contenido.php" method="POST">
        <label for="usuarioId">Nombre:</label>
        <input type="text" name="usuarioId" id="usuarioId">
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password"><br>
        <label for="captcha">No soy un robot:</label><br>
        <p id="operation" name="operation">5 + 9<?php //echo "$firstNum + $secNum";?></p>
        <input type="number" id="captcha" name="captcha">
        <br><br>
        <input type="submit">
    </form>

    <?php

    /*$firstNum = rand(0, 100);
    $secNum = rand(0, 100);

    $solution = $firstNum + $secNum;*/

    //echo "$solution-$firstNum-$secNum";

    session_start();
    //session_destroy();

    if (isset($_GET['logout'])) {

        session_destroy();
        header("Location: index.php");

        exit();
    }

    if (isset($_SESSION['error'])) {

        echo "<p style='color:red;'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);
    }
    ?>
</body>

</html>