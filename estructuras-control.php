<?php
//Son herramientas que nos provven nuestro lenguaje para poder hacer validaciones, iteraciones y otras actividades de acuerdo a la necesidad de nuestros proyectos. 

//TIPO DE ESTRUCTURAS


// 1 - IF / ELSE (Este nos ayuda a validar si sucede alguna condicion para que una accion se pudiera ejecutar. En caso del resultado se ejecutara una u otra cosa)
/*
$valorA = 10;

if ($valorA == 10){
    echo "es igual a 10";
} else {
    echo "No es igual a 10";
}


//WHILE / DO-WHILE
// Esta es tratada como un ciclo ya que se esta ejecutando una accion mientras ocurre una condicion.

$i = 0;
/*
while($i <= 10){
    echo $i++."\n";
}

do{
    echo $i++."\n";
} while ($i <= 10);

// FOR / FOREACH 
//

$arr = array(1,2,3,4);


for($i=0; $i<4; $i++){
    echo $arr[$i];
}

 //FOREACH

 foreach($arr as $value){
    echo $value;
 }
*/

//SWITCH

$valorA = 2;

switch($valorA){
    case 1:
        echo "El valor es 1";
    break;
    case 2:
        echo "El valor es 2";
    break;
    case 3:
        echo "El valor es 3";
    break;
    default:
        echo "No es ninguno de los valores 1, 2 o 3";
    break;
}
?>