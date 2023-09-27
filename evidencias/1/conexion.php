<?php

class Conexion{
    private $host = "localhost" ;
    private $user = "root";
    private $password = "";
    private $db = "bd_sistema"; 
    private $conect;   

    public function __construct(){
        try{
            $connectionString = "mysql:host".$this->host.";dbname=".$this->db.";charset=utf8";
            $this->conect = new PDO($connectionString, $this->user, $this->password);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e){
            $this->conect = "error de conexion";
            echo"ERROR: ".$e->getMessage();

        }
        
    }

}
$conexiondb = new Conexion();
echo "<pre>";
print_r($conexiondb);
echo "</pre>";
