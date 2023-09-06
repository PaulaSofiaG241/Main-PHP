<?php

require_once("classMesa.php");

$objMesa = new Mesa("mesa", 10000, "cafe", "madera","circular","mediano" );

$info= $objMesa->getInfoProducto();
foreach ($info as $identifi=>$valor){
    echo $valor."<br>";
}
