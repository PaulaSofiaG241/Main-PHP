<?php
session_start();

// Verificar inicio de sesión
if (!isset($_SESSION["logged_in"])) {
    header("Location: index.php");
    exit();
}

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
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro de Personal</title>
</head>
<body>
    <h2>Registro de Personal</h2>
    <form method="post" action="">
        Nombre: <input type="text" name="nombre"><br>
        DNI: <input type="text" name="dni"><br>
        Género: <input type="text" name="genero"><br>
        Edad: <input type="text" name="edad"><br>
        Estatura: <input type="text" name="estatura"><br>
        Peso: <input type="text" name="peso"><br>
        Fumador (si/no): <input type="text" name="fumador"><br>
        <input type="submit" value="Registrar">
    </form>
    <p><a href="buscar_personal.php">Buscar personal</a></p>
</body>
</html>
