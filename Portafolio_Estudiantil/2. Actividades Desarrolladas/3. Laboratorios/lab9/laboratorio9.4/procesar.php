<?php
session_start();

if (!isset($_SESSION['pares'])) {
    $_SESSION['pares'] = array();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero'];

    if (is_numeric($numero) && $numero % 2 == 0) {
        $_SESSION['pares'][] = $numero;
        echo "<p>Número par $numero agregado.</p>";
    } else {
        echo "<p>El número $numero no es par. Por favor, ingrese un número par.</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Pares</title>
</head>
<body>
    <h2>Lista de Números Pares</h2>
    <ul>
        <?php
        foreach ($_SESSION['pares'] as $par) {
            echo "<li>$par</li>";
        }
        ?>
    </ul>
    <a href="index.html">Ingresar otro número</a>
</body>
</html>
