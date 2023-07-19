<?php
//2. Crea un programa que reciba el nombre de un color como entrada y muestre
//un mensaje diferente según el color utilizando el ciclo `match`. Por ejemplo, si el
//color es "rojo", mostrar "El color es cálido"
$c= readline("Ingrese un color ");
$resul = match($c){
    "rojo" => 'El color es cálido',
    "azul"=> 'El color es frio',
    "negro"=>'El color es neutro',
    default => 'color invalido'

};
echo $resul

?>