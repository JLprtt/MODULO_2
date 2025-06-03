<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php
        $name = "Jericho";
        $lastname = "Swain";
        $age = 57;
        $place_origin = "Noxus";

        echo "
            Hola, me llamo <b>$name $lastname</b>. <br>
            Tengo <b>$age</b> años. <br>
            Nací en <b>$place_origin</b>. <br>
        ";
    ?>
    <hr>
    <h1>Variables dentro del HTML</h1>
    Hola, me llamo <?php echo $name . " " . $lastname;?>.<br>
    Tengo <?php echo $age;?> años.<br>
    Nací en <?php echo $place_origin;?>.
</body>
</html>