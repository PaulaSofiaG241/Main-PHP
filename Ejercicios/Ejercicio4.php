<?php
/*
4. Una empresa está realizando un aumento del 15% al sueldo base de sus 
trabajadores, escriba un algoritmo que solicite el nombre de un trabajador y su sueldo 
base, a continuación, el algoritmo debe calcular el aumento y el valor final a pagar al 
trabajador
*/
$nombre = readline("Ingrese nombre del trabajador\n");
$salario = readline("Ingrese su salario base\n");

$aumento = ($salario*0.15);
$salariototal = $salario + $aumento;

echo "\nSeñor/a $nombre se le informa que el aumento de su salario es de: $aumento, por lo tanto su salario actual es de: $salariototal\n";
?>