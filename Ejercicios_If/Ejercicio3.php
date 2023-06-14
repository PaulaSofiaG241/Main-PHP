<?php
/*3- Ejercicio de comparación múltiple:
Escribe un programa que solicite al usuario que ingrese un número del 1 al 7. Luego, el programa debe imprimir el
día de la semana correspondiente al número ingresado. Por ejemplo, si el usuario ingresa "1", el programa debe
imprimir "Lunes". Si el número ingresado no está en el rango válido, el programa debe imprimir "Número inválido".*/

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