<?php
include_once ("classOperaciones.php");

$calculadora = new Operaciones(3,5);


$res = $calculadora->suma();
echo $res;