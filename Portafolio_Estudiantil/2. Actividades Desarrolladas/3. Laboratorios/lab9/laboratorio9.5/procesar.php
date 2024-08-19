<?php
function generarMatrizIdentidad($n) {
    $matriz = array();
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($i == $j) {
                $matriz[$i][$j] = 1;
            } else {
                $matriz[$i][$j] = 0;
            }
        }
    }
    return $matriz;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n = $_POST['orden'];

    if (is_numeric($n) && $n % 2 == 0 && $n > 0) {
        $matrizIdentidad = generarMatrizIdentidad($n);
    } else {
        $error = "Por favor, ingrese un número par positivo.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz Identidad</title>
</head>
<body>
    <h2>Matriz Identidad de Orden <?php echo htmlspecialchars($n); ?></h2>
    <?php
    if (isset($matrizIdentidad)) {
        echo "<table border='1'>";
        for ($i = 0; $i < $n; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $n; $j++) {
                echo "<td>" . $matrizIdentidad[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } elseif (isset($error)) {
        echo "<p style='color: red;'>$error</p>";
    }
    ?>
    <br>
    <a href="index.html">Ingresar otro valor</a>
</body>
</html>
