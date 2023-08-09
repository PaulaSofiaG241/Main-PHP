<?php
$user= "paulag";
$contra=54321;

$userverific=strval(readline("Ingrese su usuario "));
$contraverific=strval(readline("Ingrese su contraseña "));

if($userverific == $user and $contraverific==$contra){
    echo "inicio de sesion exitoso  \n";
    $nombre= strval(readline("Ingrese su nombre "));
     $dni= intval(readline("Ingrese su DNI "));
     $genero= strval(readline("Ingrese su genero "));
     $edad= intval(readline("Ingrese su edad "));
     $estatura= floatval(readline("Ingrese su estatura "));
     $peso= floatval(readline("Ingrese su peso "));
     $fumador= strval(readline("¿Es fumador? si/no "));
    $busquedanom= strval(readline("Ingrese nombre para buscar "));
    $busquedacont= intval(readline("Ingrese DNI para buscar "));

        if($busquedanom == $nombre || $busquedacont == $dni){
          echo "La persona que busca tiene $edad años y es del genero $genero ";
    
        }
        else{
            echo "la persona qeu busca no esta registrada ";
        }
}
else{
    echo "Usuario y contraseña incorrectos <br> ";
}
