<?php

include_once("classOperacines.php");

//instaciar la clase atravez de objeto

$calculadora = new Operaciones(3, 5);

$res= $calculadora->suma();
echo $res;


$res1= $calculadora->resta();
echo "<br>".$res1;


$res2= $calculadora->multi();
echo "<br>".$res2;

$calculadora = new Operaciones(10, 2);
$res3= $calculadora->divi();
echo "<br>".$res3;
?>