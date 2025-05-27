<?php

function test_input($data) {
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
}

$nombre = test_input($_POST['nombre']);
$apellido = test_input($_POST['apellido']);
$textarea = test_input($_POST['textarea']);

//echo "$nombre <br> $apellido <br>" . $textarea;
echo "$nombre <br>$apellido <br>" . nl2br($textarea);