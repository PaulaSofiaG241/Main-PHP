<?php
/*6. Desarrollar un programa que indique el rango de una calificación de acuerdo a la siguiente
tabla:
 - 90-100: Excelente
 - 80-89: Bueno
 - 70-79: Regular
 - 60-69: Aprobado
 - 0-59: Reprobado*/

 $calif= intval(readline("Ingrese su calificacion "));
 if($calif<=100 && $calif>=70){
     if($calif<=100 && $calif>=90){
        echo "Excelente";
     }elseif($calif<=89 && $calif>=80){
        echo "Bueno";
     }else{
        echo "Regular";}
 }elseif($calif<=69 && $calif>=0){
    if($calif<=69 && $calif>=60){
        echo "Aprobado";
     }else{
        echo "Reprobado";}}
?>