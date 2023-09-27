<?php


require_once("Autoload.php");

class Usuario extends Conexion{
    private $strNombre;
    private $intTelefono;
    private $strEmail;
    private $strDireccion;
    private $conexion;
    private $intId;

    public function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function inserUsuario(string $nombre, int $telefono, string $email, string $direccion){
       try{
        $this->strNombre = $nombre;
        $this->intTelefono = $telefono;
        $this->strEmail = $email;
        $this->strDireccion = $direccion;
        $sql = "INSERT INTO usuario (nombre, telefono, email, direccion) VALUES (:nom, :tel, :email, :dir)";
        $insert = $this->conexion->prepare($sql);
        $arrData = array(":nom" => $this->strNombre,
                        ":tel" => $this->intTelefono,
                        ":email" => $this->strEmail,
                        ":dir" => $this->strDireccion
                    );
        $resInsert= $insert->execute($arrData); 
     $idInsert = $this->conexion->lastInsertId();
        $insert->closeCursor();
       return $idInsert;
       }
    catch(Exception $e){
        echo "Error: ".$e->getMessage();
    }

}
public function getUsuarios(){
    try{
        $sql = "SELECT FROM usuario";
        $execute = $this -> conexion->query($sql);
        $request = $execute->fetchAll();
        return $request;

    }catch (Exception $e){
        echo "ERROR: ".$e->getMessage();
    }
}

public function getUsuario(int $id){
    try{
        $this->intId = $id;
        $sql = "SELECT FROM usuarios WHERE idusuario = id";
        $arrData = array(":id => $this->intId");
        $query = $this->conexion->prepare($sql);
        $query->execute($arrData);
        $request = $query->fetch(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return $request;
    } catch(Exception $e){
        echo "Error: ".$e->getMessage();
    }
}
public function updateUsuarios(int $id, string $nombre ,int $telefono, string $email, string $direccion){

    try{
        $this->intId = $id;
        $this->strNombre = $nombre;
        $this->intTelefono = $telefono;
        $this->strEmail = $email;
        $this->strDireccion = $direccion;

        $sql = "UPDATE usuario SET nombre = :nom, telefono = :tel, email = :email, direccion = :dir WHERE idusuario = :id";
        $update = $this->conexion->prepare($sql);
        $arrData = array(":nom" => $this->strNombre,
                        ":tel" => $this->intTelefono,
                        ":email" => $this->strEmail,
                        ":dir" => $this->strDireccion,
                        ":id" => $this->intId
                    );
        $resUpdate= $update->execute($arrData);
        $update->closeCurson();
        return $resUpdate;
    }catch(Exception $e){
        echo "Error: ".$e->getMessage();
    }
}
public function deleteUser(int $id){
    try{
        $this->intId = $id;
        $sql = "DELETE FROM usuarios WHERE idusuario = :id";
        $delete = $this->conexion->prepare($sql);

        $arrData = [
            ":id" => $this->intId
         ];
        $del = $delete->execute($arrData);
        return $del;
    } catch(Throwable $e){
        echo "Error: ".$e->getMessage();
    }
}
}
