<?php
//9. Escribe un programa que tome una hora en formato "HH:MM" como entrada y
//muestre un mensaje diferente según la franja horaria utilizando el ciclo `match`.

$hora = readline("Ingrese la hora en formato HH:MM: ");

match (true) {
    ($hora >= "06:00" && $hora < "12:00") => echo "Buenos días",
    ($hora >= "12:00" && $hora < "18:00") => echo "Buenas tardes",
    ($hora >= "18:00" && $hora < "00:00") => echo "Buenas noches",
    ($hora >= "00:00" && $hora < "06:00") => echo "Hora de descansar",
    default => echo "Hora no válida",
};
?>
