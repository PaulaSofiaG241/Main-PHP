<?php

class Cliente{
    private $strNombreCliente;

    public function __construct(string $nombre) {
        $this->strNombreCliente = $nombre;
    }
    public function getCliente() {

        return "<h1>"."Hola ".$this->strNombreCliente . " bienvenida a nuestro restaurante"."</h1>";
    }
    
}