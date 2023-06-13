<?php
/* 
1. Escriba un algoritmo que solicite su nombre y apellido por teclado, almacénelos en
variables diferentes, posteriormente imprímalos por pantalla en una sola línea con el
mensaje “BIENVENIDO nombre y apellido”. 
*/

$nombre = readline("Ingrese su nombre \n");
$apellido = readline("Ingrese su apellido \n");
$SALUDO = "BIENVENIDO";

echo "$SALUDO $nombre $apellido ";
?>