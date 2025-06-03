<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Post</title>
</head>
<body>
    <form id="form" action="formulario_post_ab.php" method="POST">
        <b>Nombre:</b> <input type="text" name="nombre"><br>
        <b>Edad:</b> <input type="number" name="edad"><br>
        <b>E-mail:</b> <input type="email" name="email"><br>
        <b>Clase:</b>
        <select name="clase">
            <option value="bárbaro">Bárbaro</option>
            <option value="luchador">Luchador</option>
            <option value="explorador">Explorador</option>
            <option value="pícaro">Pícaro</option>
            <option value="monje">Monje</option>
            <option value="druida">Druida</option>
            <option value="brujo">Brujo</option>
            <option value="paladín">Paladín</option>
            <option value="clérigo">Clérigo</option>
            <option value="mago">Mago</option>
            <option value="bardo">Bardo</option>
            <option value="hechicero">Hechicero</option>
        </select><br>
        <b>Bonus:</b>
        <input type="radio" name="bonus" value="FUE">Fuerza
        <input type="radio" name="bonus" value="DES">Destreza
        <input type="radio" name="bonus" value="CON">Constitución
        <input type="radio" name="bonus" value="INT">Inteligencia
        <input type="radio" name="bonus" value="SAB">Sabiduría
        <input type="radio" name="bonus" value="CAR">Carísma <br>
        <b>Multiclases:</b>
        <label for="multiclases[]">
            <input type="checkbox" name="multiclases[]" value="bárbaro">Bárbaro
            <input type="checkbox" name="multiclases[]" value="luchador">Luchador
            <input type="checkbox" name="multiclases[]" value="explorador">Explorador
            <input type="checkbox" name="multiclases[]" value="pícaro">Pícaro
            <input type="checkbox" name="multiclases[]" value="monje">Monje
            <input type="checkbox" name="multiclases[]" value="brujo">Brujo
            <input type="checkbox" name="multiclases[]" value="paladín">Paladín
            <input type="checkbox" name="multiclases[]" value="clérigo">Clérigo
            <input type="checkbox" name="multiclases[]" value="mago">Mago
            <input type="checkbox" name="multiclases[]" value="bardo">Bardo
            <input type="checkbox" name="multiclases[]" value="hechicero">Hechicero <br>
        </label>
        <input type="submit">
    </form><br>

    <?php

        $clase = "homebrew";
        $multiclases = [];
        //$bonus = "+0";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $email = $_POST['email'];

            //echo "Bienvenido $nombre de $edad años de edad, le contactaremos a través del mail $email. Ha escogido $clase como clase y $bonus como bonificador de característica";

            if (!empty($_POST["clase"])) {
                $clase = $_POST['clase'];
            }
            
            if (!empty($_POST["multiclases"])) {
                $multiclases = $_POST['multiclases'];
            }

            if (!empty($_POST["bonus"])) {
                $bonus = $_POST['bonus'];
            }

        }
    ?>

    <h1>Tus datos</h1>
    <table>
        <tr>
            <thead>Datos</thead>
            <thead>Valor</thead>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><?php global $nombre; if ($nombre) echo $nombre;?></td>
        </tr>
        <tr>
            <td>Edad</td>
            <td><?php global $edad; if ($edad)  echo $edad;?></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><?php global $email; if ($email)  echo $email;?></td>
        </tr>
        <tr>
            <td>Clase</td>
            <td><?php global $clase; if ($clase)  echo $clase;?></td>
        </tr>
        <tr>
            <td>Bonificador</td>
            <td><?php global $bonus; if ($bonus) echo $bonus;?></td>
        </tr>
        <tr>
            <td>Multiclases</td>
            <td>
                <?php 
                    global $multiclases;
                    foreach($multiclases as $multiclase) {echo $multiclase . "<br>";}
                ?>
            </td>
        </tr>
    </table>
</body>
</html>