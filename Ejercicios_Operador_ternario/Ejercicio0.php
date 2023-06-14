
<?php
$Ncamisas = intval(readline("Ingrese numero de camisas"));
$VALOR = 10000;

$total = ($Ncamisas>=3 )?($VALOR*$Ncamisas)*0.8:($VALORr*$Ncamisas)*0.9;
echo "el valor total de la compra de $Ncamisas con descuento es de $total"
?>