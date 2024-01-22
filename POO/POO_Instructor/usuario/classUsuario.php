<?php

class Usuario{
    //PROPIEDADES

    private $strNombre;
    private $strEmail;
    private $strTipo;
    private $strClave;
    static $estado = "Activo";

    //metodos

    function __construct(string $nombre, string $email, string $tipo){
        $this->strNombre = $nombre;
        $this->strEmail = $email;
        $this->strTipo = $tipo;
        $this->strClave = rand(1000000,9999999);
    }

    public function getNombre(){
        return $this->strNombre;
    }
    public function getPerfil(){
        echo "<H1>DATOS PERSONALES</H1>";
        echo "El nombre es: ".$this->strNombre."<br>";
        echo "El tipo es: ".$this->strTipo."<br>";
        echo "El email es: ".$this->strEmail."<br>";
        echo "El contraseña es: ".$this->strClave."<br>";
        echo "El estado es: ".self::$estado;
    }
    public function setContrasenia(string $contra){
        $this->strClave = $contra;
    }
}