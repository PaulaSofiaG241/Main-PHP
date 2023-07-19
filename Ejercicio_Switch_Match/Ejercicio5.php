<?php
//5. Escribe un programa que tome un número del 1 al 7 como entrada y muestre
//el nombre del día de la semana correspondiente utilizando el ciclo `match`.
$n= intval(readline("Ingrese un numerodel 1 al 7 "));
$resul = match($n){
    1 => 'lunes',
    2 => 'martes',
    3 => 'miercoles',
    4=> 'jueves',
    5=> 'viernes',
    6=> 'sabado',
    7=> 'domingo',
    default => 'Numero invalido'

};
echo $resul

?>
