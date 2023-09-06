<?php
require_once ("classPersona.php");
class Cliente extends Persona{
    //propiedades
    private $strCreditos;
    //metodos
    public function __construct(int $dpi, string $nombre, int $edad){
        parent::__construct($dpi, $nombre, $edad);
    }

    public function setCreditos(string $creditos){
        $this->strCreditos = $creditos;
    }
    public function getCreditos(){
        return $this->strCreditos;
    }


}