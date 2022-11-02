<?php 

$cantidad = readline ("Cuantos pisos quieres que tenga el arbolito: ");


for ($p=0;$p<$cantidad; $p++){
    echo str_repeat("*",$p)."\n";

}

?>