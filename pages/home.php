<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scarcha Vips - Agua y Hielo a Domicilio en La Paz</title>
    <link rel="stylesheet" href="../assets/css/styles.css"> <!-- CSS principal -->
</head>
<body>
    <?php include '../includes/header.php'; ?> <!-- Header -->

    <!-- Hero Section -->
    <section id="home" class="hero" style="background-image: url('../assets/img/banerprincipal.jpeg');">
        <div class="hero-overlay flex-center">
            <h1>Scarcha Vips</h1>
            <p>Agua y Hielo a Domicilio en La Paz</p>
        </div>
    </section>

    <!-- Compromiso Section -->
    <section id="compromiso" class="compromiso section">
        <div class="container flex-center">
            <h2>Nuestro Compromiso</h2>
            <p>En <strong>Scarcha Vips</strong>, trabajamos cada día para llevar a tu puerta agua purificada y hielo de la mejor calidad. Nos dedicamos a satisfacer las necesidades de hidratación de nuestros clientes en La Paz con un servicio rápido, confiable y accesible.</p>
        </div>
    </section>

    <section id="productos" class="productos section">
        <div class="container">
            <h2>Nuestros Productos</h2>
            <div class="flex-container">
                <div class="card producto-item flex-column">
                    <h3>Botellas de Agua</h3>
                    <p>Agua purificada en presentaciones de 500 ml y 1 litro, ideal para el consumo diario de toda la familia.</p>
                    <button class="btn">Ver más</button>
                </div>
                <div class="card producto-item flex-column">
                    <h3>Garrafones</h3>
                    <p>Agua purificada en garrafones de 10 y 20 litros, con opción de entrega semanal a domicilio.</p>
                    <button class="btn">Ver más</button>
                </div>
                <div class="card producto-item flex-column">
                    <h3>Hielo Cristalino</h3>
                    <p>Hielo limpio y cristalino, ideal para bebidas y eventos, entregado en bolsas de distintos tamaños.</p>
                    <button class="btn">Ver más</button>
                </div>
            </div>
        </div>
    </section>


    <section id="servicios" class="servicios section">
        <div class="container">
            <h2>Servicios Adicionales</h2>
            <div class="flex-container">
                <div class="card servicio-item flex-column">
                    <i class="icon-delivery"></i>
                    <p>Entrega a domicilio rápida y segura en toda La Paz</p>
                </div>
                <div class="card servicio-item flex-column">
                    <i class="icon-purification"></i>
                    <p>Mantenimiento y asesoría sobre sistemas de purificación de agua</p>
                </div>
                <div class="card servicio-item flex-column">
                    <i class="icon-support"></i>
                    <p>Atención personalizada para adaptarnos a tus necesidades</p>
                </div>
            </div>
        </div>
    </section>


    <section id="contact" class="contacto section">
        <div class="container flex-center">
            <h2>Contáctenos</h2>
            <p>¿Tienes alguna pregunta? ¿Quieres programar una entrega? Estamos aquí para ayudarte.</p>
            <form action="../functions/auth.php" method="POST" class="contact-form flex-column">
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn">Enviar</button>
            </form>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?>

    <script src="../assets/js/scripts.js"></script>
</body>
</html>
