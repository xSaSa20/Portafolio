<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el valor ingresado por el usuario
    $numero = $_POST['numero'];

    // Función para calcular el factorial de un número
    function factorial($n) {
        if ($n == 0) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    // Calcular el factorial
    $resultado = factorial($numero);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultado del Factorial</title>
</head>
<body>
    <h1>Resultado del Factorial</h1>
    <p>El factorial de <?php echo $numero; ?> es <?php echo $resultado; ?>.</p>
    <br>
    <a href="index.html">Calcular otro factorial</a>
</body>
</html>
