<?php
 /*3. Desarrollar un programa que determine si un número es divisible
por 3 y por 5.*/ 
    
    $n= intval(readline("Ingrese un numero"));

    $resultado=($n%3==0 && $n%5==0) ? "SI es divisible por 3 y 5" : "NO es divisible por 3 y 5";
    echo $resultado;

?>