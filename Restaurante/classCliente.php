<?php

class Cliente{
    private $strCliente;

    public function __construct(string $cliente) {
        $this->strCliente = $cliente;
    }
    public function getCliente() {

        return $this->strCliente; 
    }
    
}