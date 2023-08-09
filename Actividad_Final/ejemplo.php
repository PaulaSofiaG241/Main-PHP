<?php
// Variables de inicio de sesión
$usuario = "paula";
$contrasena = "123456789";

// Comprobar inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_usuario = $_POST["usuario"];
    $input_contrasena = $_POST["contrasena"];
    
    if ($input_usuario === $usuario && $input_contrasena === $contrasena) {
        echo "Inicio de sesión exitoso. <br>";
        
        // Registro de personal
        $registro_personal = array();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $dni = $_POST["dni"];
            $genero = $_POST["genero"];
            $edad = $_POST["edad"];
            $estatura = $_POST["estatura"];
            $peso = $_POST["peso"];
            $fumador = $_POST["fumador"];

            $registro_personal[] = array(
                "nombre" => $nombre,
                "dni" => $dni,
                "genero" => $genero,
                "edad" => $edad,
                "estatura" => $estatura,
                "peso" => $peso,
                "fumador" => $fumador
            );

            echo "Registro de personal exitoso. <br>";
        }

        // Búsqueda de personal
        function buscarPersonal($registro, $busqueda) {
            foreach ($registro as $persona) {
                if ($persona["nombre"] === $busqueda || $persona["dni"] === $busqueda) {
                    return $persona;
                }
            }
            return null;
        }

        // Obtener parámetro de búsqueda
        $parametro_busqueda = $_GET["busqueda"];

        // Buscar en el registro
        $resultado_busqueda = buscarPersonal($registro_personal, $parametro_busqueda);

        // Mostrar resultados
        if ($resultado_busqueda) {
            echo "Resultado de la búsqueda:<br>";
            echo "Nombre: " . $resultado_busqueda["nombre"] . "<br>";
            echo "Edad: " . $resultado_busqueda["edad"] . "<br>";
            echo "Género: " . $resultado_busqueda["genero"] . "<br>";
        } else {
            echo "No se encontraron resultados para la búsqueda.<br>";
        }
    } else {
        echo "Usuario o contraseña incorrectos.<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Actividad 5</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form method="post" action="#">
        <p>Usuario: <input type="text" name="usuario"></p>
        <p>Contraseña: <input type="password" name="contrasena"></p>
        <input type="submit" value="Iniciar Sesión">
    </form>

    <h2>Registro de Personal</h2>
    <form method="post" action="#">
        <p>Nombre: <input type="text" name="nombre"></p>
        <p>DNI: <input type="text" name="dni"></p>
        <p>Género: <input type="text" name="genero"></p>
        <p>Edad: <input type="text" name="edad"></p>
        <p>Estatura: <input type="text" name="estatura"></p>
        <p>Peso: <input type="text" name="peso"></p>
        <p>Fumador (si/no): <input type="text" name="fumador"></p>
        <input type="submit" value="Registrar">
    </form>

    <h2>Búsqueda de Personal</h2>
    <form method="get" action="#">
        <p></p>Buscar por Nombre o DNI: <input type="text" name="busqueda"><br>
        <input type="submit" value="Buscar">
    </form>
</body>
</html>
