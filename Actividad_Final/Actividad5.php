
<!DOCTYPE html>
<html>
<head>
    <title>Actividad 5</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form method="POST" action="#">
        <p>Usuario: <input type="text" name="usuario"></p>
        <p>Contraseña: <input type="password" name="contrasena"></p>
        <input type="submit" value="Iniciar Sesión">
    </form>
    <br>
    <br>

    <h2>Registro de Personal</h2>
    <form method="POST" action="#">
        <p>Nombre: <input type="text" name="nombre"></p>
        <p>DNI: <input type="text" name="dni"></p>
        <p>Género: <input type="text" name="genero"></p>
        <p>Edad: <input type="text" name="edad"></p>
        <p>Estatura: <input type="text" name="estatura"></p>
        <p>Peso: <input type="text" name="peso"></p>
        <p>Fumador (si/no): <input type="text" name="fumador"></p>
        <input type="submit" value="Registrar">
    </form>
<br>
<br>
    <h2>Búsqueda de Personal</h2>
    <form method="POST" action="#">
        <p>Buscar por Nombre o DNI: <input type="text" name="busqueda"></p>
        <input type="submit" value="Buscar">
    </form>
</body>
</html>
<?php
// Variables de inicio de sesión
$usuariotrue= "paula";
$contraseñatrue = "123456";
$usuario= $_POST["usuario"];
$contraseña= $_POST["contrasena"];

$nombre= $_POST["nombre"];
$dni= $_POST["dni"];
$genero= $_POST["genero"];
$edad= $_POST["edad"];
$estatura= $_POST["estatura"];
$peso= $_POST["peso"];
$fumador = $_POST["fumador"];

$busqueda= $_POST["busqueda"];


// Comprobar inicio de sesión

if ($usuario==$usuariotrue && $contraseña==$contraseñatrue) {
   
        echo "Inicio de sesión exitoso. <br>";
         }
         
         else {
        echo "Usuario o contraseña incorrectos.<br>";
    }

    if($busqueda==$nombre || $busqueda==$dni){
        echo "la edad de la persona es $edad y su genero es $genero";
    }
    else {
        echo "Nombre o DNI incorrectos.<br>";
    }
        

?>
