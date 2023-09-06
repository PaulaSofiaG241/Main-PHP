<?php
require_once ("classPersona.php");
class Empleado extends Persona {
    //propiedades
    protected $strPuesto;
    //metodos
    function __construct(int $dpi, string $nombre, int $edad)
    {
        parent::__construct($dpi, $nombre, $edad);
    }
    function setPuesto($puesto){
        $this->strPuesto = $puesto;
    }
    function getPuesto(){
        return $this->strPuesto;
    }

}