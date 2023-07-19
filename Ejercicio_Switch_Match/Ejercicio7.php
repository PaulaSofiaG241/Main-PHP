<?php
//7. Diseña un programa que tome una nota numérica del 0 al 100 como entrada y
//muestre un mensaje diferente según el rango de la nota utilizando el ciclo
//`match`. Por ejemplo, si la nota está entre 90 y 100, mostrar "Excelente".
$n= intval(readline("Ingrese su nota del 0 al 100 ")) ;
$resul = match(true){
    $n >89 && $n <101 => 'Excelente',
    $n >69 && $n <90 => 'Alto',
    $n >39 && $n <70 => 'aprobado',
    $n >-1 && $n <40 => 'reprobado',
    

    
    default => 'nota invalida'

};
echo $resul
?>