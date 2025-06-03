<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enteros y Math</title>
</head>
<body>
    <?php
        $cateto1 = 7;
        $cateto2 = 3;

        $hipotenusa = round(hypot($cateto1, $cateto2), 2);


        $area = $cateto1*$cateto2 / 2;

        echo "
            <h1>Triangulo</h1>
            
            <h2>Cateto 1: $cateto1</h2>
            <h2>Cateto 2: $cateto2</h2>

            <h1>Area: $area</h1>

            <h1>Hipotenusa: $hipotenusa</h1>        
        "
    ?>
</body>
</html>