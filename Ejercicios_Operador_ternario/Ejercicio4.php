<?php
$n= intval(readline("Ingrese su calificacion"));
if($n<90 && $n>=60){
    echo " Aprobado";
}
elseif($n<60){
    echo " Reprobado";
}
elseif($n>=90){
    echo" Sobresaliente";
}
?>