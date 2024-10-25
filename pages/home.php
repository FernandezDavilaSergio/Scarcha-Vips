<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distribuidora de Agua</title>
    <link rel="stylesheet" href="assets/css/styles.css"> <!-- CSS principal -->
</head>
<body>
    <?php include 'includes/header.php'; ?> <!-- Header -->

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container hero-content">
            <h1>Distribuidora de Agua Purificada</h1>
            <p>Pureza y calidad para tu bienestar</p>
            <a href="#contact" class="btn">Contáctanos</a>
        </div>
    </section>

    <!-- Productos Section -->
    <section id="productos" class="productos">
        <div class="container">
            <h2>Nuestros Productos</h2>
            <div class="productos-container">
                <div class="card producto-item">
                    <h3>Botellas de Agua</h3>
                    <p>Presentaciones de 500 ml y 1 litro.</p>
                </div>
                <div class="card producto-item">
                    <h3>Garrafones</h3>
                    <p>Disponibles en 10 y 20 litros.</p>
                </div>
                <div class="card producto-item">
                    <h3>Sistemas de Purificación</h3>
                    <p>Instalación y venta de equipos de purificación.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios Section -->
    <section id="servicios" class="servicios">
        <div class="container">
            <h2>Servicios Adicionales</h2>
            <ul class="servicios-list">
                <li>Entrega a domicilio rápida y eficiente</li>
                <li>Mantenimiento de sistemas de purificación</li>
                <li>Asesoría sobre el uso adecuado del agua</li>
            </ul>
        </div>
    </section>

    <!-- Contacto Section -->
    <section id="contact" class="contacto">
        <div class="container">
            <h2>Contáctenos</h2>
            <form action="functions/auth.php" method="POST">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit" class="btn">Enviar</button>
            </form>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?> <!-- Footer -->

    <script src="assets/js/scripts.js"></script>
</body>
</html>
