<?php
/*2. Crear un programa que determine si un número es par o impar*/ 
$n= intval(readline("Ingrese un numero"));

$resultado=(($n%2)==0) ? "el numero es par" : "el numero es impar";
echo $resultado;

?>
