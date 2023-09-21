<?php
try{
    $base = new PDO(dsn:'mysql:localhost=localhost;
    dbname=db_sistema','root','');
    echo "se establecion la conexion a su bd";

}catch(Exception $e){
    die("error".$e->getMessage());
}