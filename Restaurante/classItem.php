8<?php

class Item{
    private $strNombreItem;
    private $fltPrecio;

    public function __construct(string $nombreItem, float $precio) {
        $this->strNombreItem = $nombreItem;
        $this->fltPrecio = $precio;

    }
     public function getNombre() {
        return $this->strNombreItem;
    }

    public function getPrecio() {
        return $this->fltPrecio;
    } 
    
}
