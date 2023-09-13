<?php

class Mesa extends Pedido{
    private $intMesas; 
    private $arrayCliente = []; 
    

 function __construct( array $pedido, int $numeroMesa, ) {
    parent::__construct($pedido);
    $this->intMesas = $numeroMesa;
   
    }

     function setAgregarCliente( $numeroCliente) {
        $this->arrayCliente = $numeroCliente;
    }
    function getAgregarCliente() {
        $this->arrayCliente ;
    }
    public function getPedido() {
        return $this->arrayPedido;
    }



}