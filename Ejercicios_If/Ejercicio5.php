<?php
/*5- Ejercicio de uso de operadores lógicos:
Escribe un programa que solicite al usuario que ingrese dos números. Luego, el programa debe imprimir si ambos
números son mayores que 10 utilizando la sentencia if y los operadores lógicos "&&" y ">". Si ambos números son
mayores que 10, el programa debe imprimir "Ambos números son mayores que 10". Si solo uno de los números es
mayor que 10, el programa debe imprimir "Solo uno de los números es mayor que 10". Si ninguno de los números
es mayor que 10, el programa debe imprimir "Ninguno de los números es mayor que 10".*/

$n1 = intval(readline("Ingrese un numero"));
$n2 = intval(readline("Ingrese otro numero"));

if($n1>10 && $n2>10){
    echo "Ambos números son mayores que 10";
}
elseif($n1<10 && $n2>10) {
    echo "Solo uno de los números es mayor que 10";
}
elseif($n1>10 && $n2<10) {
    echo "Solo uno de los números es mayor que 10";
}
else{
    echo"Ninguno de los números es mayor que 10";
}

?>