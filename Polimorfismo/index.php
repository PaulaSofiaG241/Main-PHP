<?php

require_once("classMesa.php");

$objProducto = new Producto("Puerta", 50.000);

$info= $objProducto->getInfoProducto();
echo "<H1>Informacion Producto</H1>";       
foreach ($info as $identifi=>$valor){
    echo "<pre>";
    echo $identifi."<br>";
    echo $valor."<br>";
    echo "</pre>";
}




$objMueble = new Mueble("Mueble", 450.000, "cafe", "madera" );

$info= $objMueble->getInfoProducto();
echo "<H1>Informacion Mueble</H1>";       
foreach ($info as $identifi=>$valor){
    echo "<pre>";
    echo $identifi."<br>";
    echo $valor."<br>";
    echo "</pre>";
}



$objMesa = new Mesa("Mesa", 60.000, "cafe", "madera","circular","mediano" );
$objMesa -> setForma("circular");
$info= $objMesa->getInfoProducto();
echo "<H1>Informacion Mesa</H1>";       
foreach ($info as $identifi=>$valor){
    echo "<pre>";
    echo $identifi."<br>";
    echo $valor."<br>";
    echo "</pre>";
}
