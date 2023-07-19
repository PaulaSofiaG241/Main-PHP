<?php
//1. Escribe un programa que tome un número entero como entrada y muestre un
//mensaje diferente dependiendo de si el número es 1, 2, o 3 utilizando el ciclo `match`

$n= intval(readline("Ingrese un numero del 1 al 3 ")) ;
$resul = match($n){
    1 => 'perro',
    2=> 'gato',
    3=>'pez',
    default => 'numero invalido'

};
echo $resul

?>