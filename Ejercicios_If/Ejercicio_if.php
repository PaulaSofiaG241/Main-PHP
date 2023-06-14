<?php
/*En una fabrica de computadores se plantea ofrecer a los clientes un descuento que
dependerá del numero de computadores que compre. Si los computadores son menos
de 5, se le dará un descuento del 10%, si el numero de computadores comprados es
mayor o igual a 5 pero menos de 10 se le otorga un 20% de descuento; y si son mas de
10 se les da un 40% de descuento. El precio de cada computador es de $700 USD.*/


$compu= intval(readline("Ingrese numero de computadores"));
$PRECIO= 700;

if($compu<5){
    echo ($PRECIO*$compu)*0.9;
}

if((10>$compu) and ($compu>=5)){
    echo ($PRECIO*$compu)*0.8;
}


if($compu>10){
    echo ($PRECIO*$compu)*0.6;
}



?>