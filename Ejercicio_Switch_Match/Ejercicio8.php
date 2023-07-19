<?php
//8. Desarrolla un programa que tome una cadena de texto como entrada y
//muestre un mensaje según la longitud de la cadena utilizando el ciclo `match`.
//Por ejemplo, si la longitud es mayor a 10 caracteres, mostrar "La cadena es
//larga".

$cadena = readline("Ejemplo de cadena de texto");

$longitud = strlen($cadena);

$res =match ($longitud) {
    10 =>  "La cadena es larga",
    default => "La cadena no es larga",
};
echo $res
?>

