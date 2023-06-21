<?php
/*Pida a un usuario la edad y genero, para que el sistema le indique si ya
esta en la edad para pensionarse. Tenga en cuenta que un Hombre se
puede pensionar a los 60años o mas, mientras que las mujeres lo
pueden hacer después de los 54 años.
*/ 
$g= readline("Ingrese su genero ");
$e= intval(readline("Ingrese su edad "));
if($g=="masculino" ){
    if($e>=60) {
        echo "Esta en edad de pensionarse";
    }else{
        echo "No esta en edad de pensionarse";}}
elseif($g=="femenino" ){
    if($e>=55) {
        echo "Esta en edad de pensionarse";
    }else{
        echo "No esta en edad de pensionarse";}}
?>