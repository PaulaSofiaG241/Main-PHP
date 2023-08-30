<?php
include_once("classUsuario.php");

$users = new Usuario("Paula", "pasogodi@gmail.com", 
"Adminitrador" );

$nombre= $users->getNombre();

echo"el nombre desde el metodp getNombre es ".$nombre;
echo "<br>";
echo ""
