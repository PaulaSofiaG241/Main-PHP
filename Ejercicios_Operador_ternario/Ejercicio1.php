<?php
/*1. Escribir un programa que verifique si un número es positivo, negativo
o cero.*/
$n= intval(readline("Ingrese un numero"));
if($n>=1){
    echo "El numero es positivo";
}
elseif($n<=-1){
    echo "El numero es negativo";
}
else{
    echo "El numero es cero";
}
?>