<?php
//6. Crea un programa que reciba un número del 1 al 12 como entrada y muestre el
//nombre del mes correspondiente utilizando el ciclo `match`.
$m= intval(readline("Ingrese un numerodel 1 al 12 "));
$resul = match($m){
    1 => 'Mes de enero',
    2 => 'Mes de febrero',
    3 => 'Mes de marzo',
    4=> 'Mes de abril',
    5=> 'Mes de mayo',
    6=> 'Mes de junio',
    7=> 'Mes de julio',
    8=> 'Mes de agosto',
    9=> 'Mes de septiembre',
    10=> 'Mes de octubre',
    11=> 'Mes de noviembre',
    12=> 'Mes de diciembre',
    default => 'Numero invalido'
};
echo $resul;
?>
