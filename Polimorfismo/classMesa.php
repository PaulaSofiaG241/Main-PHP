<?php
require_once("classMueble.php");

class Mesa extends Mueble{
    public $strForma= "";
    public $strTamaño;
    public $strStatus="Agotado";

    public function  __construct(string $descripcion, float $precio, string $color, string $material, string $forma, 
    string $tamaño){
        parent::__construct($descripcion, $precio, $color, $material, );
        $this->strTamaño= $tamaño;
    }

    public function getInfoProducto(){
        $arrayProducto= array(
            'PRODUCTO:'=>$this->strDescripcion,
            'PRECIO:'=>$this->fltPrecio,
            'STOCK_MINiMO:'=>$this->intStockMinimo,
            'ESTADO:'=>$this->strStatus,
            'COLOR:'=>$this->strColor,
            'MATERIAL:'=>$this->strMaterial,
            'FORMA:'=>$this->strForma,
            'TAMAÑO:'=>$this->strTamaño


        );
        return $arrayProducto;
    }


    public function setforma(string $forma){
        $this->strForma= $forma;
    }


    public function getforma(){
        return $this->strForma;
    }
}
