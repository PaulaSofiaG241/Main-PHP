<?php
//Escribe una función llamada “generarFibonacci” que reciba un número 
//entero como parámetroy genere, y devuelva una lista con la secuencia de Fibonacci hasta ese número. La secuencia de fibonacci comienza con 0
//y 1, cada número subsiguiente es la suma de los dos números anteriores ( 0,1,1,2,3,5,8….).

function generarFibonacci($n) {
    $fibonacci = array();
    $a = 0;
    $b = 1;
    
    while ($a <= $n) {
        $fibonacci[] = $a;
        $temp = $a;
        $a = $b;
        $b = $temp + $b;
    }
    
    return $fibonacci;
}

if (isset($_POST['numero'])) {
    $numeroIngresado = intval($_POST['numero']);
    $secuenciaFibonacci = generarFibonacci($numeroIngresado);
} else {
    $numeroIngresado = 100; // Valor por defecto
    $secuenciaFibonacci = array();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secuencia de Fibonacci</title>
</head>
<body>
    <h1>Secuencia de Fibonacci</h1>
    
    <form method="POST">
        <label for="numero">Ingresa un número:</label>
        <input type="number" id="numero" name="numero" value="<?php echo $numeroIngresado; ?>" required>
        <button type="submit">Generar Secuencia</button>
    </form>
    
    <h2>Secuencia de Fibonacci:</h2>
    <ul>
        <?php
        foreach ($secuenciaFibonacci as $numero) {
            echo "<li>$numero</li>";
        }
        ?>
    </ul>
</body>
</html>