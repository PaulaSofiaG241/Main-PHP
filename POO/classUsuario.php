<?php
class Usuario{
    private $strNombre;
    private $strEmail;
    private $strTipo;
    private $strClave;


function __construct(string $nombre, 
string $email, string $tipo){

    $this-> strNombre = $nombre;
    $this-> strEmail = $email;
    $this-> strTipo = $tipo;
}
public function getNombre(){
    return $this->strNombre;

}
public function getPerfil(){
    echo "<h1>DATOS PERSONALES</H1>";


}
function cambiar_clave(){

}
}