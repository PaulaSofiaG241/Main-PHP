<?php
$color = 'rojo';
//asigno valos a un variable
//es este caso el match estara dentro una variable la cual se asignara a la variable accion y no necesita casos, mas corto
//comparaciones basicas, mas avanzadas switch
$accion = match($color){
    'verde' => 'Avanzar',
    'naranja'=> 'Prepara',
    'rojo'=>'Para',
    default => 'No existe ese color'

};

//comillas simples: texto plano sin operaciones y menor espacio en la memoria, no se pueden poner variables.
?>