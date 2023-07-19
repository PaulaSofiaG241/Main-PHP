<?php
//10. Crea un programa que reciba una opción del 1 al 5 como entrada y realice una
//acción diferente según la opción utilizando el ciclo `match`

$op = readline("Ingrese una opción del 1 al 5: ");

$resul=match ($o) {
    1 => "Has seleccionado la opción 1",
    2 => "Has seleccionado la opción 2",
    3 =>  "Has seleccionado la opción 3",
    4 =>  "Has seleccionado la opción 4",
    5 =>  "Has seleccionado la opción 5",
    default =>  "Opción no válida",
};
echo $resul;
?>
