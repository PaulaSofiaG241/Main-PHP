<?php
require_once ("classPersona.php");
require_once ("classEmpleado.php");
require_once ("classCliente.php");

$objEmpleado = new Empleado(23,"Diego",33);
$objEmpleado->setPuesto("Administrador");
echo $objEmpleado->getDatosPersonales();
echo "<br>";
echo "Puesto: ".$objEmpleado->getPuesto();

