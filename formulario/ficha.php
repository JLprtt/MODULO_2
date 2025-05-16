<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjeta de Usuario - Tiefling</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #0d0d0d;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .user-card {
            background: #1a1a1a;
            width: 320px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(139, 0, 0, 0.7);
            text-align: center;
            padding: 25px;
            color: #f5f5f5;
        }

        .user-card img {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 3px solid #8B0000;
        }

        .user-card h2 {
            margin: 10px 0 5px;
            font-size: 24px;
            color: #e63946;
        }

        .user-card p {
            color: #ccc;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .social-links a {
            margin: 0 12px;
            text-decoration: none;
            color: #ff4d4d;
            font-weight: bold;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: #ff9999;
        }
    </style>
</head>

<body>
    <?php

    $clase = "homebrew";
    $multiclases = [];
    //$bonus = "+0";
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $email = $_POST['email'];
        $foto = $_FILES['foto']['name'];
        $foto_tmp = $_FILES['foto']['tmp_name'];

        if (!move_uploaded_file($foto_tmp, $foto)) {
            echo 'Error al subir la imagen';
            $foto = "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/8ae32905-63c6-489d-ab35-5fef6701d114/dd2xu30-2bcffb33-a67f-4c8c-9ccc-fd7b03a9dcf4.png/v1/fill/w_900,h_1246,q_80,strp/krom__tiefling_warlock_by_o_oris_dd2xu30-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTI0NiIsInBhdGgiOiJcL2ZcLzhhZTMyOTA1LTYzYzYtNDg5ZC1hYjM1LTVmZWY2NzAxZDExNFwvZGQyeHUzMC0yYmNmZmIzMy1hNjdmLTRjOGMtOWNjYy1mZDdiMDNhOWRjZjQucG5nIiwid2lkdGgiOiI8PTkwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.PQJYlFaIJHW3GSkDEIvIqIzq3CYcz0oa9EuGPgEdmkw";
        }
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

    <div class="user-card">
        <img src="<?php echo $foto;?>" alt="Tiefling Avatar">
        <h2>Drakar Varn</h2>
        <p>Hechicero Tiefling del Inframundo</p>
        <div class="social-links">
            <a href="#">TomoArcano</a>
            <a href="#">InfernaGram</a>
        </div>
    </div>

</body>

</html>