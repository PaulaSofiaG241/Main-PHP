<?php
//Escribe una funcion que calcule la suma de todos los digitos de numeros entre dado. 
//por ejemplo, si el numero es 1234, la suma seria 1 + 2 + 3 + 4 = 10.
function sumaDigitos($numero) {
    //Función sumaDigitos 
    $suma = 0;
    //while se ejecuta mientras una condición específica sea verdadera.
    while ($numero > 0) {
        //Utiliza un bucle while para extraer cada dígito del número.
        $digito = $numero % 10;
        $suma += $digito; 
        //Mediante el uso de operaciones de módulo y división, se suma cada dígito al valor de la variable $suma.
        $numero = intdiv($numero, 10);
       //intdiv se utiliza para realizar una división entera entre dos números y obtener el cociente como resultado.
    }
    
    return $suma;
}
//isset se utiliza para comprobar si una variable está definida y no es nula.
if (isset($_POST['numero'])) {
    $numeroIngresado = intval($_POST['numero']);
    $suma = sumaDigitos($numeroIngresado);
} else {
    $numeroIngresado = 1234; // Valor por defecto
    $suma = 0;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dígitos</title>
</head>
<body>
    <h1>La Suma de Dígitos</h1>
    
    <form method="POST">
        <label for="numero">Ingresa un número entero:</label>
        <input type="number" id="numero" name="numero" value="<?php echo $numeroIngresado; ?>" required>
        <button type="submit">Calcular</button>
    </form>
    
    <?php
    if (isset($_POST['numero'])) {
        echo "<p>La suma de los dígitos es: $suma</p>";
    }
    ?>
</body>
</html>