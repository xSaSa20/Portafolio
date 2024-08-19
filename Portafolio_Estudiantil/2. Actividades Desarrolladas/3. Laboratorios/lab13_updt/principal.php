
<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido - Pastelería Deliciosa</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <header>
        <h1>Bienvenido a Pastelería Deliciosa, <?php echo $_SESSION['usuario']; ?>!</h1>
    </header>
    <nav>
    <a href="#home">Inicio</a>
        <a href="#products">Productos</a>
        <a href="#contact">Contacto</a>
        <a href="logout.php"><button>Cerrar Sesión</button></a>
    </nav>
    <main class="container">
    <section id="home">
            <h2>Bienvenidos a nuestra pastelería</h2>
            <p>Disfruta de los más deliciosos pasteles y postres, hechos con amor y los mejores ingredientes.</p>
        </section>
        <section id="products">
            <h2>Nuestros Productos</h2>
            <div class="products">
                <div class="product">
                    <img src="images/pastel1.jpg" alt="Pastel 1">
                    <h2>Pastel de Chocolate</h2>
                    <p>Delicioso pastel de chocolate con relleno cremoso.</p>
                </div>
                <div class="product">
                    <img src="images/pastel2.jpg" alt="Pastel 2">
                    <h2>Cheesecake</h2>
                    <p>Suave y cremoso cheesecake con una base crujiente.</p>
                </div>
                <div class="product">
                    <img src="images/pastel3.jpg" alt="Pastel 3">
                    <h2>Pastel de Fresas</h2>
                    <p>Fresco pastel de fresas con crema batida.</p>
                </div>
            </div>
        </section>
        <section id="contact">
            <h2>Contacto</h2>
            <p>Visítanos en nuestra tienda o contáctanos a través de nuestras redes sociales.</p>
            <div class="contact-details">
                <h3>Nuestra Dirección</h3>
                <p>Calle de la Dulzura, 123<br>
                Ciudad del Sabor, PA 12345</p>
                <h3>Teléfono</h3>
                <p>(+123) 456-7890</p>
                <h3>Email</h3>
                <p><a href="mailto:info@pasteleriadeliciosa.com">info@pasteleriadeliciosa.com</a></p>
            </div>
            <h3>Formulario de Contacto</h3>
            <form action="mailto:info@pasteleriadeliciosa.com" method="post" enctype="text/plain">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                <label for="message">Mensaje:</label><br>
                <textarea id="message" name="message" rows="4" required></textarea><br><br>
                <input type="submit" value="Enviar">
            </form>
            <h3>Síguenos en Redes Sociales</h3>
            <p>
                <a href="https://facebook.com/pasteleriadeliciosa" target="_blank">Facebook</a> |
                <a href="https://instagram.com/pasteleriadeliciosa" target="_blank">Instagram</a> |
                <a href="https://twitter.com/pasteleriadeliciosa" target="_blank">Twitter</a>
            </p>
        </section>
    </main>
    <footer class="footer">
        <p>&copy; 2024 Pastelería Deliciosa</p>
    </footer>
</body>
</html>
