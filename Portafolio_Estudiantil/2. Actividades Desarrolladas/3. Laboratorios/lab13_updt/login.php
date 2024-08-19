
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - Pastelería Deliciosa</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <header>
        <h1>Pastelería Deliciosa - Inicio de Sesión</h1>
    </header>
    <main class="container">
        <form action="login.php" method="POST">
            <label for="usuario">Nombre de Usuario o Correo Electrónico:</label>
            <input type="text" name="usuario" required><br>
            
            <label for="password">Contraseña:</label>
            <input type="password" name="password" required><br>
            
            <button type="submit" name="iniciar_sesion">Iniciar Sesión</button>

            <a href="index.php"><button type="button">Regresar al Inicio</button></a>
        </form>

        <?php
        session_start();

        if (isset($_POST['iniciar_sesion'])) {
            $conexion = new mysqli("localhost", "root", "", "pasteleria");
            if ($conexion->connect_error) {
                die("Conexión fallida: " . $conexion->connect_error);
            }

            $usuario = $_POST['usuario'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM usuarios WHERE nombre_usuario='$usuario' OR correo='$usuario'";
            $resultado = $conexion->query($sql);

            if ($resultado->num_rows > 0) {
                $fila = $resultado->fetch_assoc();
                if (password_verify($password, $fila['password'])) {
                    $_SESSION['usuario'] = $fila['nombre_usuario'];
                    header("Location: principal.php");
                } else {
                    echo "Contraseña incorrecta.";
                }
            } else {
                echo "No se encontró el usuario.";
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
