<?php
session_start();

// Verificar inicio de sesión
if (!isset($_SESSION["logged_in"])) {
    header("Location: index.php");
    exit();
}

$registro_personal = array(/* ... */);

function buscarPersonal($registro, $busqueda) {
    foreach ($registro as $persona) {
        if ($persona["nombre"] === $busqueda || $persona["dni"] === $busqueda) {
            return $persona;
        }
    }
    return null;
}

$resultado_busqueda = null;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $parametro_busqueda = $_GET["busqueda"];
    $resultado_busqueda = buscarPersonal($registro_personal, $parametro_busqueda);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Búsqueda de Personal</title>
</head>
<body>
    <h2>Búsqueda de Personal</h2>
    <form method="get" action="">
        Buscar por Nombre o DNI: <input type="text" name="busqueda"><br>
        <input type="submit" value="Buscar">
    </form>
    
    <?php if ($resultado_busqueda) : ?>
        <h2>Resultado de la Búsqueda</h2>
        <p>Nombre: <?php echo $resultado_busqueda["nombre"]; ?></p>
        <p>Edad: <?php echo $resultado_busqueda["edad"]; ?></p>
        <p>Género: <?php echo $resultado_busqueda["genero"]; ?></p>
    <?php endif; ?>

    <p><a href="registro_personal.php">Volver al registro de personal</a></p>
</body>
</html>
