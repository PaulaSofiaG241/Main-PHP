<?php
/* 2-Ejercicio de comparación de cadenas:
Escribe un programa que solicite al usuario que ingrese su
nombre. Si el nombre ingresado es "Juan", el programa debe
imprimir "¡Hola Juan!" en la pantalla. Si el nombre es diferente, el
programa debe imprimir "Lo siento, no te conozco".*/
 $nombre = readline("Ingrese su nombre\n");
 if($nombre === "Juan"){
    echo "¡Hola $nombre!";
 }
 else{
    echo "Lo siento, no te conozco";
 }

?>