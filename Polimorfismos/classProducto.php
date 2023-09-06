<?php
class Producto{
    public $strDescripcion;
    public $fltPrecio;
    public $intStockMinimo = 18;
    protected $strStatus;

    public function __construct(string $descripcion, float $precio){
        $this->strDescripcion= $descripcion;
        $this->fltPrecio= $precio;
    }

    public function getInfoProducto(){
        $arrayProducto= array(
            'producto'=>$this->strDescripcion,
            'precio'=>$this->fltPrecio,
            'stock_minimo'=>$this->intStockMinimo,
            'estado'=>$this->strStatus,
            'color'=>$this->strColor,
            'material'=>$this->strMaterial,
            'forma'=>$this->strForma,
            'tamaño'=>$this->strTamaño


        );
        return $arrayProducto;
    }
}
