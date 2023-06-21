<?php
/*4. Escribir un programa que clasifique a un estudiante en Aprobado
(nota mayor o igual a 60), Reprobado (nota menor a 60) o
Sobresaliente (nota mayor o igual a 90).*/ 
$n= intval(readline("Ingrese su calificacion"));
if($n<90 && $n>=60){
    echo " Aprobado";
}
elseif($n<60){
    echo " Reprobado";
}
elseif($n>=90){
    echo" Sobresaliente";
}
?>