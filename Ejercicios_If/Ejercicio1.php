<?php
/* 1- Ejercicio de comparación numérica:
Escribe un programa que solicite al usuario que ingrese un
número. Luego, el programa debe imprimir si el número ingresado
es mayor, menor o igual a 10 utilizando la sentencia if. */
$numero = intval(readline ("Ingrese un numero?\n"));

if($numero > 10){
    echo "$numero es mayor a 10";
}
elseif($numero < 10){
    echo "$numero es menor a 10";
}
else{
    echo "$numero es igual a 10";
}
?>