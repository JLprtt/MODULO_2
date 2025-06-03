<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            padding: 15px;
            font-size: 20px;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
 
        form,table {
            padding: 15px;
            border-radius: 5px;
            box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.1);
            height: 50vh;
            width: 50vw;
           
        }
        table{
            height: 0;
        }
 
        td,th{
            width: 25vw;
        }
 
 
        input {
            height: 30px;
            font-size: 20px;
            margin: 10px;
            border-radius: 5px;
 
        }
 
        .boton {
            background-color: darkolivegreen;
            height: 60px;
            width: 100px;
            border: none;
            padding: 6px;
            color: white;
 
        }
    </style>
</head>
 
<body>
    <form id="form" action="index.php" method="POST">
        Nombre: <input type="text" name="nombre"><br>
        Edad: <input type="number" name="edad"><br>
        E-mail: <input type="email" name="email"><br>
        <select name="curso">
            <option value="css">css</option>
            <option value="js">Javascript</option>
            <option value="html">Html</option>
        </select><br>
        <input type="radio" name="genero" value="masculino">Masculino<br>
        <input type="radio" name="genero" value="femenino">Femenino<br>
        <input type="radio" name="genero" value="binario">Otro<br>
        <input type="submit" class="boton">
    </form>
 
    <?php
  
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $email = $_POST['email'];
        $curso = $_POST['curso'];
        $genero = $_POST['genero'];
 ?>
 <h1>Tus datos:</h1>
    <table>
        <tr>
            <th>Dato</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><?php echo $nombre; ?></td>
        </tr>
        <tr>
            <td>Edad</td>
            <td><?php echo $edad; ?></td>
        </tr>
        <tr>
            <td>Genero</td>
            <td><?php echo $genero; ?></td>
        </tr>
        <tr>
            <td>Curso</td>
            <td><?php echo $curso; ?></td>
        </tr>
    </table>
<?php       
    }
    ?>
    
</body>
 
</html>