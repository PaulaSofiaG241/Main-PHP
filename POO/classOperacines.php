<?php
class Operaciones{
    //1er propiedades 

    public $intCantidadUno;
    
    public $intCantidadDos;

    public $resultado;


    //2do metodos primero, es darle valor a las variables

    function __construct(int $num1, int $num2){
        $this -> intCantidadUno = $num1;
        $this -> intCantidadDos = $num2;

    }
    function suma(){
        $this->resultado= $this->intCantidadUno + $this->intCantidadDos ;
        return $this->resultado;
    }
    function resta(){
        $this->resultado= $this->intCantidadUno - $this->intCantidadDos ;
        return $this->resultado;
    }
    function multi(){
        $this->resultado= $this->intCantidadUno * $this->intCantidadDos ;
        return $this->resultado;
    }
    function divi(){
        $this->resultado= $this->intCantidadUno / $this->intCantidadDos ;
        return $this->resultado;
    }





    
    
}