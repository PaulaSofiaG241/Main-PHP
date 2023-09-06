<?php
require_once("classProducto.php");

class Mueble extends Producto{
    public $strColor;
    public $strMaterial;
    public $strStatus="Activar";

    public function  __construct(string $descripcion, float $precio, string $color, string $material){
        parent::__construct($descripcion, $precio);
        $this->strColor= $color;
        $this->strMaterial= $material;

    }

}