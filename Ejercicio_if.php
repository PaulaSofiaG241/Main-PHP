<?php

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