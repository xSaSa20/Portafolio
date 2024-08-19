
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Pastelería Deliciosa</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <header>
        <h1>Pastelería Deliciosa - Registro</h1>
    </header>
    <main class="container">
        <form action="registro.php" method="POST">
            <label for="nombre_usuario">Nombre de Usuario:</label>
            <input type="text" name="nombre_usuario" required><br>
            
            <label for="correo">Correo Electrónico:</label>
            <input type="email" name="correo" required><br>
            
            <label for="password">Contraseña:</label>
            <input type="password" name="password" required><br>
            
            <button type="submit" name="registrar">Registrar</button>

            <a href="index.php"><button type="button">Regresar al Inicio</button></a>
        </form>

        <?php
        if (isset($_POST['registrar'])) {
            $conexion = new mysqli("localhost", "root", "", "pasteleria");
            if ($conexion->connect_error) {
                die("Conexión fallida: " . $conexion->connect_error);
            }
            $nombre_usuario = $_POST['nombre_usuario'];
            $correo = $_POST['correo'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $sql = "INSERT INTO usuarios (nombre_usuario, correo, password) VALUES ('$nombre_usuario', '$correo', '$password')";
            if ($conexion->query($sql) === TRUE) {
                echo "Registro exitoso!";
            } else {
                echo "Error: " . $sql . "<br>" . $conexion->error;
            }
            $conexion->close();
        }
        ?>
    </main>
    <footer class="footer">
        <p>&copy; 2024 Pastelería Deliciosa</p>
    </footer>
</body>
</html>
