<?php
//3. Diseña un programa que tome una letra como entrada y muestre un mensaje
//según la categoría a la que pertenezca la letra utilizando el ciclo `match`. Por
//ejemplo, si la letra es una vocal, mostrar "Es una vocal".
$l= readline("Ingrese una letra ");

$resul = match($l){
    "a","e","i","o","u","A","E","I","O","U" => 'Es una vocal',
    "q","w","r","t","y","p","s","d","f","g","h","j","k","l","ñ","z","x","c","v","b","n","m",
    "Q","W","R","T","Y","P","S","D","F","G","H","J","K","L","Ñ","Z","X","C","V","B","N","M"=> 'Es una consonante',
    default => 'caracter invalido'

};
echo $resul

?>