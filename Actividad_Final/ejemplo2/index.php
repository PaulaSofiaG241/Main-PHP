<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_usuario = $_POST["usuario"];
    $input_contrasena = $_POST["contrasena"];
    
    // Validar inicio de sesión
    if ($input_usuario === "admin" && $input_contrasena === "12345") {
        $_SESSION["logged_in"] = true;
        header("Location: registro_personal.php");
        exit();
    } else {
        $error_login = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
</head>
<body>
    <?php if (!isset($_SESSION["logged_in"])) : ?>
        <h2>Iniciar Sesión</h2>
        <?php if (isset($error_login)) echo "<p>$error_login</p>"; ?>
        <form method="post" action="">
            Usuario: <input type="text" name="usuario"><br>
            Contraseña: <input type="password" name="contrasena"><br>
            <input type="submit" value="Iniciar Sesión">
        </form>
    <?php else : ?>
        <p>¡Inicio de sesión exitoso! <a href="registro_personal.php">Ir al registro de personal</a></p>
    <?php endif; ?>
</body>
</html>
