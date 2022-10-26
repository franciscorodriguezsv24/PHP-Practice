<?php 

// operadores logicos 
// "AND" TRUE si ambos valores son true
// "OR" TRUE si un valor de ambos es true
// "XOR" TRUE si uno de los 2 valores son true, pero no ambos.
// "NOT" TRUE si el valor es false
// "&&" TRUE si ambos valores son true
// "||" TRUE si uno de los valores es true. 

// "AND"
$valorA = true;
$valorB = true;

$resultado = $valorA and $valorB;
var_dump($resultado);


// "OR"
$valorA = true;
$valorB = false;

$resultado = $valorA or $valorB;
var_dump($resultado);


// "XOR"

$valorA = true;
$valorB = false;

$resultado = $valorA xor $valorB;
var_dump($resultado);

// "NOT"

$valorA = true;


$resultado = !$valorA;
var_dump($resultado);




?>