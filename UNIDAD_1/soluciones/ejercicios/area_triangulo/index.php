<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de un triángulo rectángulo. Variables INT</title>
</head>

<body>
    <?php
        $cateto1 = 10;
        $cateto2 = 15;

        $area = $cateto1 * $cateto2 / 2;

        $hipotenusa = sqrt(pow($cateto1, 2) + pow($cateto2, 2));
        $hipotenusa = round($hipotenusa, 2);
    ?>
    <h1>Triángulo</h1>
    <h2>
        Cateto 1 = <?php echo $cateto1; ?><br>
        Cateto 2 = <?php echo $cateto2; ?><br>
    </h2>
    <h1>Área del triángulo: <?php echo $area; ?></h1>

    <h1>Hipotenusa del triángulo: <?php echo $hipotenusa; ?></h1>
</body>

</html>