<?php
$PI= 3.1416;

$var1 =1;
$var2 =2;
$var3 =3;

$resul= $PI + $var1;

echo"el resultado de la suma entre $PI y $var1 es: $resul";

?>
<h1>Codigo html</h1>

texto suelto pero que aparece

<?php
   #esto va a imprimir:
   echo "<h1> Codigo php </h1>";
   print("funcion print");
    
   //esto no se interpreta ni se imprime al ser un comentario de php

   /*
   muchas lineasde comentario php, 
   si este se sale de la etiqueta <?php, 
   queda como un texto suelto y aparece en pantalla, 
   y asimismo con las demas etiquetas de texto 
   */




   /*esto es un comentario normar de html que tampoco se muestra en
    pantalla pero si en el codigo al inspeccionar, 
   los comentariios que son netamente php no aparecen ni ahi*/
   echo"<!--eair-->";

   /*en conclusion si la etiqueta esta hecha en php se puede dejar 
   sola, si es una etiqueta html y se quiere imprimir debe ir con echo o sprint*/
   
?>
<!--aca afuera si sirven las etiquetas html sueltas pero 
no las php=(estas quedan como un texto suelto y aparecen en pantalla )-->


<?php
#variables: los textos van con comillas y los numeros sin, son cajitas en la memoria para guardar datos

#declarar
$datos= "uno";

#imprimir
echo $datos;

?>