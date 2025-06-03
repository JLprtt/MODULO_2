<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del servidor con $_SERVER (Global)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 20px;
        }
        h1 {
            text-align: center;
            color: #007BFF;
        }
        ul {
            max-width: 800px;
            margin: auto;
            padding: 0;
            list-style: none;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        li {
            padding: 10px 15px;
            border-bottom: 1px solid #eee;
        }
        li:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <h1>Datos del servidor</h1>
<ul>
<?php
    foreach($_SERVER as $clave => $valor){
        echo "<li>$clave : <b>$valor</b></li>";
    }
?>
</ul>
    
</body>
</html>