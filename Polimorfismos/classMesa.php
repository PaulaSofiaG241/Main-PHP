<?php
require_once("classMueble.php");

class Mesa extends Mueble{
    public $strForma= "";
    public $strTamaño;
    public $strStatus="Activar";

    public function  __construct(string $descripcion, float $precio, string $color, string $material, string $forma, 
    string $tamaño){
        parent::__construct($descripcion, $precio, $color, $material, );
        $this->strTamaño= $tamaño;
    }

    public function setforma(string $forma){
        $this->strForma= $forma;
    }


    public function getforma(){
        return $this->strForma;
    }
}