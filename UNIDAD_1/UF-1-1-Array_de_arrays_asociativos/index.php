<?php
//Array de arrays asociativos con los datos de los estudiantes
$estudiantes = [

    ["nombre" => "Oliver", "edad" => 21, "nota" => 6.8],

    ["nombre" => "Amelia", "edad" => 19, "nota" => 4.3],

    ["nombre" => "Harry", "edad" => 22, "nota" => 7.3],

    ["nombre" => "Emily", "edad" => 20, "nota" => 5.0],

    ["nombre" => "George", "edad" => 23, "nota" => 3.7]

];

//function datosEstudiantes($estudiantes) {

//Bucle forEach para imprimir los datos de los estudiantes 
foreach ($estudiantes as $estudiante) {

    $estudianteNombre = $estudiante["nombre"];
    $estudianteEdad = $estudiante["edad"];
    $estudianteNota = $estudiante["nota"];

    echo "<h3>$estudianteNombre, $estudianteEdad años, $estudianteNota de nota.</h3><br>";
}

//}

//datosEstudiantes($estudiantes);

echo "<hr>";

echo "<h1>Lista de estudiantes aprobados</h1>";

//Bucle forEach para imprimir los estudiantes aprobados
foreach($estudiantes as $estudiante) {
    
    $estudianteNombre = $estudiante["nombre"];
    $estudianteNota = $estudiante["nota"];

    if ($estudianteNota >= 5.0) {

        echo "<h3>· $estudianteNombre</h3>";
    }

}

/*foreach($estudiantes as $estudiante) {

    $notaMayor = 0;
    $notaMenor;

    if ($notaMayor < $estudiante["nota"]) {
        
        $notaMayor = $estudiante["nota"];
        
        echo "$notaMayor<br>";

    } else {
        $notaMayor = 0;
    }

}*/

//Declaro $notaMayor (0 porque "siempre" va a ser menor que "la nota más alta")
$notaMayor = 0;

//
$notaMenor = 15;

//Función para actualizar $notaMayor con la nota más alta
function notaMayor($estudiantes) {
    //Bucle forEach para revisar nota por nota
    foreach($estudiantes as $estudiante) {

        //Llamo a $notaMayor
        global $notaMayor;
        
        //Si $notaMayor es menor que la nota que se está revisando $notaMayor se actualiza con la nueva nota
        if ($notaMayor < $estudiante["nota"]) {
            
            $notaMayor = $estudiante["nota"];

            //Devuelvo $notaMayor, para sacarla de la función y actualizarla gloabalmente
            return $notaMayor;
            
        }
        
    }
}

function notaMenor($estudiantes) {
    foreach($estudiantes as $estudiante) {

        global $notaMenor;
    
        if ($notaMenor > $estudiante["nota"]) {
            
            $notaMenor = $estudiante["nota"];

            return $notaMenor;
            
        }
        
    }
}

//Bucle forEach llamando a las funciones para comparar $notaMayor y $notaMenor con cada nota dentro de $estudiantes
foreach($estudiantes as $estudiante) {
    
    notaMayor($estudiantes);
    notaMenor($estudiantes);

}

/*echo "<hr>";

//Imrpimo la nota más alta y más baja respectivamente
echo "<h2>La nota más alta es $notaMayor.</h2>";
echo "<h2>La nota más baja es $notaMenor.</h2>";

//creamos variable para guardar nota mas alta
$notaMasAlta = "";
//recorremos el array de estudiantes
foreach($estudiantes as $estudiante){
//comparamos las notas de los estudiantes con la variable notaMasAlta
    if($estudiante["nota"]> $notaMasAlta){
//si la nota es mayor que la variable notaMasAlta, actualizamos la variable notaMasAlta
        $notaMasAlta = $estudiante["nota"];
 
    }
}
//mostramos por pantalla la nota mas alta
    echo "<h2>Nota mas alta es :</h2><b> $notaMasAlta<b/><br>";*/