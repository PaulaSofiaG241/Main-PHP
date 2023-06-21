<?php
/*9. Desarrollar un programa que determine si un número es primo o no. Un número es primo si
solo es divisible por 1 y por sí mismo. */
$n= intval(readline("Ingrese un numero"));
$resultado=(($n%2!==0) and ($n%3!==0)and ($n%5!==0) and ($n%7!==0)) ? "El numero SI es primo" : "El numero NO es primo";
echo $resultado;

?>
