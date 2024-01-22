<?php

class Operaciones{
    //PROPIEDAS

    public $intCantidaduno;
    public $intCantidaddos;
    public $resultado;

    //METODOS
    function __construct(int $num1, int $num2){
        $this -> intCantidaduno = $num1;
        $this -> intCantidaddos = $num2;
    }

    function suma(){
        $this->resultado = $this->intCantidaduno + $this->intCantidaddos;
        return $this->resultado;
    }
}