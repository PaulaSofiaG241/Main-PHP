<?php
//crea una funcion llamada "esPalindromo" que reciba una cadena de texto como parametro y devuelva true 
//si la cadena es un palindromo y false  si no lo es. Un palindromo es una palabra
//o frase que se lee igual de izquierda a derecha a izquierda, ignorando los espacios y signos de puntuacion


function esPalindromo($cade) {//preg_replace para eliminar espacios y signos de puntuación, y convierte en minúsculas.
    $cade = preg_replace("/[^a-zA-Z0-9]/", "", strtolower($cade)); 
    return $cade === strrev($cade);//strrev para determinar si es un palíndromo.
}

if (isset($_POST['cade'])) {
    $cade = $_POST['cade'];
    $resultado = esPalindromo($cade) ? "Es un palíndromo" : "No es un palíndromo";
} else {
    $cade = '';
    $resultado = '';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobador de Palíndromos</title>
</head>
<body>
    <h1>Comprobador de Palíndromos</h1>
    <form method="POST">
        <label for="cade">Ingresa una palabra:</label><br>
        <input type="text" name="cade" value="<?php echo $cade; ?>" required><br>
        <button type="submit">Verificar</button>
    </form>
    <p><?php echo $resultado; ?></p>
</body>
</html>