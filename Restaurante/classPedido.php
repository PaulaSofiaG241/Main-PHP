<?php

class Pedido {
    public $arrayPedido;
  
    public function  __construct(array $pedido){
        $this->arrayPedido = $pedido;
        
    }
    public function getPedido() {
        return $this->arrayPedido;
    }

    public function getCalcularTotal() {

        $total = 0;
        foreach ($this->arrayPedido as $identifi=>$valor) {
            
            $total += $valor;
        }
        return "Su pedido es igual a " .$total. " pesos" ;
    }
    
}