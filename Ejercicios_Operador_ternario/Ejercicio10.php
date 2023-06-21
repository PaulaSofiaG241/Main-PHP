<?php
/*10. Escribir un programa que calcule el descuento aplicable a una compra de acuerdo al
monto total:
 - Si el monto es mayor o igual a $1000, aplicar un descuento del 10%.
 - Si el monto es mayor o igual a $500, aplicar un descuento del 5%.
 - Si el monto es menor a $500, no aplicar descuento*/

 $total = intval(readline("Ingrese elvalor total de su cuenta\n"));
 if($total>=500 ){
    $res = ($total>=1000) ? ($total*0.1):($total*0.05);
    echo $res;
}else{
       echo "No aplica descuento";}
 ?>