<?php
//Escribe una función llamada “FierroAlv” que imprima los números del 1 al 100, 
//pero para los múltiplos de 3 imprime “peso” en lugar del número y 
//para los múltiplos de 5 imprime “pluma”. Para los números que son múltiplos de ambos, imprime “Pesopluma”
function FierroAlv($numero) {
    //for para recorrer desde 1 hasta el número ingresado.
    for ($i = 1; $i <= $numero; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "Pesopluma";
        } elseif ($i % 3 == 0) {
            echo "peso";
        } elseif ($i % 5 == 0) {
            echo "pluma";
        } else {
            echo $i;
        }
        
        echo "<br>"; //  salto de línea 
    }
}

if (isset($_POST['numero'])) {
    $numeroIngresado = intval($_POST['numero']);
} else {
    $numeroIngresado = 100; // Valor por defecto
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FierroAlv</title>
</head>
<body>
    <h1>Números </h1>
    
    <form method="POST">
        <label for="numero">Ingresa un número:</label>
        <input type="number" id="numero" name="numero" value="<?php echo $numeroIngresado; ?>" required>
        <button type="submit">Enviar</button>
    </form>
    
    <?php FierroAlv($numeroIngresado); ?>
</body>
</html>