<?php
class Persona{
    public $intDpi;
    public $strNombre;
    public $intEdad;

    function __construct(int $dpi, string $nombre, int $edad){
        $this->intDpi=$dpi;
        $this->strNombre=$nombre;
        $this->intEdad=$edad;

    }
    public function getDatosPersonales(){

        $datos = "
        <H1>DATOS PERSONALES</H1>
        DPI: {$this->intDpi}<br>
        Nombre:{$this->strNombre}<br>
        Edad:{$this->intEdad}<br>
        
        ";
        return $datos;
    }

}