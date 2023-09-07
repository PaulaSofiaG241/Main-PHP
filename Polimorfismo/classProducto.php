<?php
class Producto{
    public $strDescripcion;
    public $fltPrecio;
    public $intStockMinimo = 18;
    protected $strStatus="Activo";

    public function __construct(string $descripcion, float $precio){
        $this->strDescripcion= $descripcion;
        $this->fltPrecio= $precio;
    }

    public function getInfoProducto(){
        $arrayProducto= array(
            'PRODUCTO:'=>$this->strDescripcion,
            'PRECIO:'=>$this->fltPrecio,
            'STOCK_MINiMO:'=>$this->intStockMinimo,
            'ESTADO:'=>$this->strStatus
            


        );
        return $arrayProducto;
    }
}
