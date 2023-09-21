<?php
print_r("<pre>");
print_r($_POST);
print_r("</pre>");

echo $_POST["nombre"]."<br>".$_POST["contra"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="">Nombre</label>
    <input type="text" name ="nombre">
    <br>
    <label for="">Contraseña</label>
    <input type="text" name ="contra">
    <br>
    <input type="submit" Enviar>

</form>
</body>
</html>