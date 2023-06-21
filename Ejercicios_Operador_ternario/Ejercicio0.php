
<?php
/*Hacer un programa que calcule el total a pagar por la compra de
camisas. Si se compran 3 camisas o mas se debe aplicar un descuento
del 20% sobre el total de la compra y si son menos de 3 camisas un
descuento del 10%*/

$Ncamisas = intval(readline("Ingrese numero de camisas"));
$VALOR = 10000;

$total = ($Ncamisas>=3 )?($VALOR*$Ncamisas)*0.8:($VALORr*$Ncamisas)*0.9;
echo "el valor total de la compra de $Ncamisas con descuento es de $total"
?>