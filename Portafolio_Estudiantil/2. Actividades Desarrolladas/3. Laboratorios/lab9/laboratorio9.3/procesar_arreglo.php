<?php
// Inicializar el arreglo
$arreglo = [];

// Llenar el arreglo con 20 elementos únicos
while (count($arreglo) < 20) {
    $numero = rand(1, 100); // Generar un número aleatorio entre 1 y 100

    if (!in_array($numero, $arreglo)) { // Verificar si el número ya está en el arreglo
        $arreglo[] = $numero;
    }
}

// Encontrar el valor y la posición del elemento mayor
$mayorValor = max($arreglo);
$posicionMayor = array_search($mayorValor, $arreglo);

// Mostrar los resultados
echo "El arreglo es: \n";
print_r($arreglo);
echo "\n";
echo "El mayor valor en el arreglo es: $mayorValor\n";
echo "La posición del mayor valor es: $posicionMayor\n";
?>
</html>
