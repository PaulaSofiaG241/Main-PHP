<?php
/* 
3. Escriba un algoritmo que le permita ingresar dos números enteros por el teclado,
posteriormente calcule la suma, la resta y la multiplicación de los dos números e
imprima los números leídos y los resultados de las tres operaciones.
*/
$a = readline("Ingrese primer numero\n");
$b = readline("Ingrese segundo numero\n");

$suma = $a + $b;
$resta = $a - $b;
$multi = $a * $b;
$divi = $a / $b;


echo "\nel resultado de la suma es: $suma\n";
echo "el resultado de la resta es: $resta\n";
echo "el resultado de la multiplicacion es: $multi\n";
echo "el resultado de la divion es: $divi\n";
?>