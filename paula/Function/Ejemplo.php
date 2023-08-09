<?php 
function CalcularDescuento(int $original, float $descuento){

    $preciodesc= ($original*$descuento)/100;
    $preciofinal = $original-$preciodesc;
    return $preciofinal;
}
$ver =CalcularDescuento(10000, 30);

echo  "El precio final es de $ver";

