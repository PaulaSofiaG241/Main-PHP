<?php
//4. Desarrolla un programa que tome una fecha como entrada en formato "día-mes-año" 
//y muestre un mensaje diferente según el mes utilizando el ciclo`match`.
echo "a continuacion debera ingresar una fecha numerica en 3 pasos "; 

$d= readline(" Ingrese el dia ");
$m= intval(readline("Ingrese el mes"));
$a= readline("Ingrese el año ");
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
    default => 'fecha invalida'

};
echo $resul

?>