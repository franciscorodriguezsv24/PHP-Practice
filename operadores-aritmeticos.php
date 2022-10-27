<?php 
//Operadores aritmeticos. 

// Ejemplo                  Nombre                          Resultado
// $a + $b                 Suma                          La suma del valor $a y $b
// $a - $b                 resta                         La diferencia entre el valor $a y $b
// $a * $b                 Multiplicacion                El resultado de multiplicar $a y $b
// $a / $b                 Division                      El cociente de la division de $a y $b
// $a % $b                 Modulo                        El remanente de la division de $a y $b
// $a ** $b                Potenciacion                  El resultado de elevar $a a la potencia $b

//SUMA
echo "Suma"."\n";
$valorA = 5;
$valorB = 2;

$suma = $valorA + $valorB;

var_dump($suma);

//RESTA
echo "Resta"."\n";
$valorA = 5;
$valorB = 2;

$resta = $valorA - $valorB;

var_dump($resta);

//MULTIPLICACION
echo "Multiplicacion"."\n";
$valorA = 5;
$valorB = 2;

$multi= $valorA * $valorB;

var_dump($multi);

//DIVISION

echo "Division"."\n";
$valorA = 5;
$valorB = 2;

$divi= $valorA / $valorB;

var_dump($divi);

//MODULO
echo "Modulo"."\n";
$valorA = 5;
$valorB = 2;

$mod= $valorA % $valorB;

var_dump($mod);

//POTENCIA
echo "Potencia"."\n";
$valorA = 5;
$valorB = 2;

$pot= $valorA ** $valorB;

var_dump($pot);

?>