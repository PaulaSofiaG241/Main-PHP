<?php
require_once( "Autoload.php");

$objUsuario = new Usuario();

$isert = $objUsuario -> inserUsuario("Hugo", 54654845, "hugo@info.com", "Ciudad Guatemala" );
print_r ($isert);