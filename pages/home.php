<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distribuidora de Agua</title>
    <link rel="stylesheet" href="../assets/css/styles.css"> <!-- CSS principal -->
</head>
<body>
    <?php include '../includes/header.php'; ?> <!-- Header -->

    <!-- Hero Section -->
    <section id="home" class="hero" style="
        background-image: url('../assets/images/hero-background.jpg');
        background-size: cover;
        background-position: center;
        padding: 100px 0;
        text-align: center;
        color: white;
    ">
        <div class="container hero-content" style="max-width: 600px; margin: auto;">
            <h1 style="font-size: 2.5rem; margin-bottom: 20px;">Distribuidora de Agua Purificada</h1>
            <p style="font-size: 1.2rem; margin-bottom: 30px;">Pureza y calidad para tu bienestar</p>
            <a href="#contact" class="btn" style="
                background-color: #004080;
                color: #ffffff;
                padding: 10px 20px;
                text-decoration: none;
                font-weight: bold;
                border-radius: 5px;
            ">Contáctanos</a>
        </div>
    </section>

    <!-- Productos Section -->
    <section id="productos" class="productos" style="padding: 60px 0; text-align: center;">
        <div class="container">
            <h2 style="font-size: 2rem; color: #004080; margin-bottom: 40px;">Nuestros Productos</h2>
            <div class="productos-container" style="display: flex; justify-content: space-around; gap: 20px;">
                <div class="card producto-item" style="
                    padding: 20px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    border-radius: 8px;
                    max-width: 200px;
                ">
                    <h3>Botellas de Agua</h3>
                    <p>Presentaciones de 500 ml y 1 litro.</p>
                </div>
                <div class="card producto-item" style="
                    padding: 20px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    border-radius: 8px;
                    max-width: 200px;
                ">
                    <h3>Garrafones</h3>
                    <p>Disponibles en 10 y 20 litros.</p>
                </div>
                <div class="card producto-item" style="
                    padding: 20px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    border-radius: 8px;
                    max-width: 200px;
                ">
                    <h3>Sistemas de Purificación</h3>
                    <p>Instalación y venta de equipos de purificación.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios Section -->
    <section id="servicios" class="servicios" style="padding: 60px 0; background-color: #f4f4f4; text-align: center;">
        <div class="container">
            <h2 style="font-size: 2rem; color: #004080; margin-bottom: 40px;">Servicios Adicionales</h2>
            <ul class="servicios-list" style="list-style: none; padding: 0;">
                <li style="font-size: 1.2rem; margin-bottom: 15px;">Entrega a domicilio rápida y eficiente</li>
                <li style="font-size: 1.2rem; margin-bottom: 15px;">Mantenimiento de sistemas de purificación</li>
                <li style="font-size: 1.2rem;">Asesoría sobre el uso adecuado del agua</li>
            </ul>
        </div>
    </section>

    <!-- Contacto Section -->
    <section id="contact" class="contacto" style="padding: 60px 0; text-align: center;">
        <div class="container" style="max-width: 600px; margin: auto;">
            <h2 style="font-size: 2rem; color: #004080; margin-bottom: 40px;">Contáctenos</h2>
            <form action="../functions/auth.php" method="POST">
                <label for="name" style="display: block; margin-bottom: 10px;">Nombre:</label>
                <input type="text" id="name" name="name" required style="width: 100%; padding: 8px; margin-bottom: 20px;">

                <label for="email" style="display: block; margin-bottom: 10px;">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required style="width: 100%; padding: 8px; margin-bottom: 20px;">

                <label for="message" style="display: block; margin-bottom: 10px;">Mensaje:</label>
                <textarea id="message" name="message" rows="4" required style="width: 100%; padding: 8px; margin-bottom: 20px;"></textarea>

                <button type="submit" class="btn" style="
                    background-color: #004080;
                    color: #ffffff;
                    padding: 10px 20px;
                    font-weight: bold;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                ">Enviar</button>
            </form>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?> <!-- Footer -->

    <script src="../assets/js/scripts.js"></script>
</body>
</html>
