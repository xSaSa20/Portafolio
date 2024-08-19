
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de la Base de Datos - Pastelería Deliciosa</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <header>
        <h1>Información de la Base de Datos</h1>
    </header>
    <main class="container">
        <?php
        $conexion = new mysqli("localhost", "root", "", "pasteleria");
        if ($conexion->connect_error) {
            die("Conexión fallida: " . $conexion->connect_error);
        }

        echo "<p>Base de Datos: pasteleria</p>";
        echo "<p>Tabla: usuarios</p>";

        $sql = "SELECT * FROM usuarios";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            echo "<table border='1'><tr><th>ID</th><th>Nombre de Usuario</th><th>Correo</th></tr>";
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr><td>" . $fila['id'] . "</td><td>" . $fila['nombre_usuario'] . "</td><td>" . $fila['correo'] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No hay datos en la tabla.";
        }

        $conexion->close();
        ?>
    </main>
    <footer class="footer">
        <p>&copy; 2024 Pastelería Deliciosa</p>
    </footer>
</
