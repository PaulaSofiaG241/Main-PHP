<?php
/*7. Escribir un programa que muestre el día de la semana correspondiente a un número del 1 al
7. Considera que 1 es Lunes y 7 es Domingo.*/


$numero = intval(readline("Ingrese un número del 1 al 7\n"));

if($numero === 1){
    echo "Lunes";
}
if($numero === 2){
    echo "Martes";
}
if($numero === 3){
    echo "Miercoles";
}
if($numero === 4){
    echo "Jueves";
}
if($numero === 5){
    echo "Viernes";
}
if($numero === 6){
    echo "Sabado";
}
if($numero === 7){
    echo "domingo";
}
if($numero >= 8){
    echo "Número inválido";
}

?>