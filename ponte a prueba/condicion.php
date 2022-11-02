<?php 

//ninios 

$Estudiante = readline("Agrega tu edad: ");

if ($Estudiante > 7){
    echo "Tu eres mayor de 7, tu espacio sera en la parte alta de la bodega";
} else if ($Estudiante <5 and $Estudiante > 1){
    echo "Tu eres menor de 5, tu espacio seran en la parte inferior de la bodega"; 
} else if ($Estudiante  >= 5 && $Estudiante <7){
    echo "Tu edad esta entre 5 y 7, tu espacio sera en la parte media de la bodega";
} else {
    echo "No tienes registro de edad pero hay un espacio para ti en la bodega de al lado";
}


?>