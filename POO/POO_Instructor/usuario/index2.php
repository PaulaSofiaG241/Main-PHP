<?php
require_once ("classUsuario.php");

$user = new Usuario("Diego","diego@info.com","Administrador");

$nombre = $user->getNombre();

echo "El nombre desde el metodo getNombre() es: ".$nombre;
echo "<br>";
echo "El metodo static se muestra asi: ".Usuario::$estado;
echo "<br>";

$user->getPerfil();
$user->setContrasenia("HolaDiego123");
$user->getPerfil();


