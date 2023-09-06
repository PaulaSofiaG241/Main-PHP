<?php
//Crea una función llamada “ ordenarArray” que reciba un arreglo de 
//números como parámetro y lo ordene de menor a mayor utilizando el algoritmo de ordenamiento burbuja
function ordenarArray($arr) { //Función ordenarArray, oma un arreglo de números como parámetro y 
    //utiliza el algoritmo de ordenamiento burbuja para ordenar los elementos de menor a mayor.
    $n = count($arr); // Obtener la cantidad de elementos en el arreglo
    
    // Iterar a través de todos los elementos del arreglo
    for ($i = 0; $i < $n - 1; $i++) {
        // Iterar a través de los elementos restantes después de $i
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Comparar elementos adyacentes y realizar intercambio si es necesario
            if ($arr[$j] > $arr[$j + 1]) {
                // Intercambiar los elementos usando una variable temporal
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    
    return $arr;
}

if (isset($_POST['numeros'])) {
    // Obtener los números ingresados como una cadena y convertirlos en un arreglo
    $numeros = explode(',', $_POST['numeros']);
   
    // Convertir los elementos del arreglo en números enteros
    $numeros = array_map('intval', $numeros);
    
    // Ordenar el arreglo utilizando la función ordenarArray
    $numerosOrdenados = ordenarArray($numeros);
    print_r ($numeros);
} else {
    $numeros = '';
    $numerosOrdenados = array();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenar Arreglo</title>
</head>
<body>
    <h1>Ordenar Arreglo</h1>
    
    <form method="POST">
        <label for="numeros">Ingresa los números separados por comas:</label>
        <input type="text" id="numeros" name="numeros" value="" required>
        <button type="submit">Ordenar</button>
    </form>
    
    <h2>Arreglo Ordenado:</h2>
    <?php
    if (!empty($numerosOrdenados)) {
        echo implode(', ', $numerosOrdenados);
    } else {
        echo "Ingresa números y haz clic en 'Ordenar'";
    }
    ?>
</body>
</html>