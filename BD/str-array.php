<?php
//variable tipo string
$array ="";
//variable tipo array
//$a = [];
$a = array();
//vamos a hacer uso de la funcion explode()
$fecha = "11/09/2023";
$numeros = "uno dsos tres cuatro cinco";


echo "la variables tipo string inicial es : ".$fecha."<br>";
var_dump($fecha);
print_r(("<pre>"));
print_r (explode("/", $fecha));
print_r(("</pre>"));


echo "la variables tipo string inicial es : ".$numeros."<br>";
var_dump($numeros);
print_r(("<pre>"));
print_r (explode(" ", $numeros));
print_r(("</pre>"));

date_default_timezone_set("America/Bogota");
$fecha_actual = date("d/m/Y h:i:s A");
echo "Bogota"."<br>";
echo $fecha_actual."<br>";

date_default_timezone_set("America/New_York");
$fecha_actual = date("d/m/Y h:i:s A");
echo "New York"."<br>";
echo $fecha_actual."<br>";

date_default_timezone_set("Asia/Hong_Kong");
$fecha_actual = date("d/m/Y h:i:s A");
echo "Hong Kong"."<br>";
echo $fecha_actual."<br>"; 

