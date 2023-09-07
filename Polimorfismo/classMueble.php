<?php
require_once("classProducto.php");

class Mueble extends Producto{
    public $strColor;
    public $strMaterial;
    public $strStatus="Activo";

    public function  __construct(string $descripcion, float $precio, string $color, string $material){
        parent::__construct($descripcion, $precio);
        $this->strColor= $color;
        $this->strMaterial= $material;

    }
    public function getInfoProducto(){
        $arrayProducto= array(
            'PRODUCTO:'=>$this->strDescripcion,
            'PRECIO:'=>$this->fltPrecio,
            'STOCK_MINiMO:'=>$this->intStockMinimo,
            'ESTADO:'=>$this->strStatus,
            'COLOR:'=>$this->strColor,
            'MATERIAL:'=>$this->strMaterial


        );
        return $arrayProducto;
    }
}

