<?php
/*8. Crear un programa que determine si una letra ingresada es una vocal o una consonante.*/
$le= readline("Ingrese una letra: ");
$resp= ($le=="a" || $le=="e" || $le=="i" || $le=="o" || $le=="u" 
|| $le=="A" || $le=="E" || $le=="I" || $le=="O" || $le=="U" )? "vocal":"consonante";
echo $resp;
?>