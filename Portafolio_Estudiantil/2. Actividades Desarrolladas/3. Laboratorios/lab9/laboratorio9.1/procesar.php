<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el valor ingresado por el usuario
    $ventas = $_POST['ventas'];

    // Verificar el valor y asignar la imagen correspondiente
    if ($ventas > 80) {
        $imagen = "goodface.jpg";
        $mensaje = "¡Excelente trabajo! Las ventas superaron el 80%.";
    } elseif ($ventas >= 50 && $ventas <= 79) {
        $imagen = "regularface.jpg";
        $mensaje = "Buen desempeño. Las ventas están entre el 50% y el 79%.";
    } else {
        $imagen = "badface.jpg";
        $mensaje = "Necesitamos mejorar. Las ventas están por debajo del 50%.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Ventas</title>
</head>
<body>
    <h1><?php echo $mensaje; ?></h1>
    <img src="<?php echo $imagen; ?>" alt="Indicador de Desempeño">
    <br>
    <a href="index.html">Volver</a>
</body>
</html>
