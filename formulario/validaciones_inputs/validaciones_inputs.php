<?php


$nombreErr = $emailErr = $enlaceErr = $textareaErr = "";
$nombre = $email = $textarea = $enlace = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    /*$nombre = test_input($_POST['nombre']);
    $email = test_input($_POST['email']);
    $enlace = test_input($_POST['enlace']);
    $textarea = test_input($_POST['textarea']);*/


    if (!isset($_POST["nombre"]) || empty($_POST["nombre"])) {

        http_response_code(400); // Faltan parámetros.
        $nombreErr = "Tienes que introducir un nombre<br>";
    } else {
        $nombre = test_input($_POST["nombre"]);  // Asignar el valor primero
        if (!preg_match("/^[a-zA-Z-' ]*$/", $nombre)) {
            $nombreErr = "Introduce solo letras mayúsculas o minúsculas<br>";
        }
    }
    if (!isset($_POST["email"]) || empty($_POST["email"])) {
        $emailErr = "Tienes que introducir un email<br>";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Tienes que introducir un email válido<br>";
        }
    }

    if (!isset($_POST["enlace"]) || empty($_POST["enlace"])) {
        $enlaceErr = "Tienes que introducir un enlace<br>";
    } else {
        $enlace = test_input($_POST["enlace"]);
        if (!filter_var($enlace, FILTER_VALIDATE_URL)) {
            $enlaceErr = "Tienes que introducir un enlace válido<br>";
        }
    }
    if (!isset($_POST["textarea"]) || empty($_POST["textarea"]) || !strlen($_POST['textarea']) > 0) {
        $textareaErr = "Tienes que introducir algún texto<br>";
    } else {
        $textarea = test_input($_POST["textarea"]);
    }

    /*if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }*/
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    /*if ($tipo === "email")*/
    return $data;
}
//VALIDACIÓN CHECKBOXES

//YOUTUBE.COM && WWW.YOUTUBE.COM -> HTTPS://WWW.YOUTUBE.COM
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validaciones inputs</title>

    <style>
    /* Estilo para los mensajes de error */
    .error {
        color: #8B0000; /* Rojo oscuro */
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
        padding: 12px; /* Aumenté el padding */
        margin: 10px -10px; /* Aumenté el margen */
        border: 1px solid #555555; /* Gris oscuro */
        border-radius: 4px;
        background-color: #2f2f2f; /* Gris oscuro para fondo de inputs */
        color: white; /* Blanco para el texto */
    }

    /* Estilo para el botón de enviar */
    input[type="submit"] {
        background-color: #8B0000; /* Rojo oscuro */
        color: white;
        padding: 12px 25px; /* Aumenté el padding */
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 15px; /* Añadí margen superior */
    }

    input[type="submit"]:hover {
        background-color: #B22222; /* Rojo más claro cuando se pasa el ratón */
    }

    /* Estilo del fondo de la página */
    body {
        background-color: #121212; /* Fondo negro */
        color: #d3d3d3; /* Texto gris claro */
        font-family: Arial, sans-serif;
    }

    /* Estilo para el formulario */
    form {
        background-color: #333333; /* Gris oscuro */
        padding: 30px; /* Aumenté el padding */
        border-radius: 8px;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2); /* Aumenté la sombra */
        width: 350px; /* Aumenté el ancho del formulario */
        margin: 0 auto;
    }

    /* Estilo para los labels */
    label {
        color: #d3d3d3; /* Gris claro */
        font-size: 16px; /* Aumenté el tamaño de la fuente */
        font-weight: bold;
        margin-bottom: 5px; /* Añadí un margen inferior */
        display: inline-block; /* Aseguro que el label esté encima del input */
    }

    /* Estilo para los checkboxes */
    input[type="checkbox"] {
        margin-right: 10px;
    }

    /* Estilo de los inputs de checkbox */
    input[type="checkbox"] + label {
        color: #d3d3d3; /* Gris claro */
        font-size: 14px;
    }

    /* Margen entre los checkbox */
    input[type="checkbox"]:not(:last-child) {
        margin-right: 15px;
    }
</style>


</head>

<body>
    <form action="validaciones_inputs.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="William" value="<?php echo $nombre; ?>">
        <span class="error">* <?php echo $nombreErr; ?></span>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="ejemplo@ejemplo.com" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br>
        <label for="enlace">Enlace:</label>
        <input type="text" name="enlace" id="enlace" placeholder="youtube.com" value="<?php echo $enlace; ?>">
        <span class="error">* <?php echo $enlaceErr; ?></span>
        <br>
        <label for="textarea">Textarea:</label>
        <textarea name="textarea" id="textarea" placeholder="Area de texto"><?php echo $textarea; ?></textarea>
        <span class="error">* <?php echo $textareaErr; ?></span>
        <br>
        <input type="checkbox" name="html" id="html">HTML
        <input type="checkbox" name="javascript" id="javascript">JavaScript
        <input type="checkbox" name="css" id="css">CSS
        <br><br>
        <input type="submit" value="Enviar">
    </form>


</body>

</html>