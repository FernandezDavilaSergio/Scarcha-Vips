<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distribuidora de Agua</title>
    <link rel="stylesheet" href="assets/css/styles.css"> <!-- Enlace al CSS principal -->
</head>
<body>
    <?php include 'includes/header.php'; ?> <!-- Incluir el Header -->

    <!-- Sección Hero -->
    <section id="home" class="hero" style="
        padding: 60px 20px;
        text-align: center;
        background-color: #e0f7ff;
    ">
        <h1 style="font-size: 2.5rem; color: #004080; margin-bottom: 10px;">Bienvenidos a nuestra Distribuidora</h1>
        <p style="font-size: 1.2rem; color: #333;">Ofrecemos agua purificada de la mejor calidad.</p>
        <a href="#contact" class="btn" style="
            display: inline-block;
            padding: 10px 20px;
            background-color: #00a3cc;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        ">Contáctenos</a>
    </section>

    <!-- Sección de Productos -->
    <section id="about" class="features" style="
        padding: 40px 20px;
        background-color: #f0f4f8;
        text-align: center;
    ">
        <h2 style="font-size: 2rem; color: #004080; margin-bottom: 20px;">Nuestros Productos</h2>
        <div class="grid" style="
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        ">
            <div class="card feature-card" style="
                padding: 20px;
                background-color: #e0f7ff;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                width: 280px;
            ">
                <h3 style="color: #004080;">Botellas de Agua</h3>
                <p>Agua pura en presentaciones de 500ml y 1 litro.</p>
            </div>
            <div class="card feature-card" style="
                padding: 20px;
                background-color: #e0f7ff;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                width: 280px;
            ">
                <h3 style="color: #004080;">Garrafones</h3>
                <p>Agua en garrafones de 10 y 20 litros.</p>
            </div>
            <div class="card feature-card" style="
                padding: 20px;
                background-color: #e0f7ff;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                width: 280px;
            ">
                <h3 style="color: #004080;">Sistema de Purificación</h3>
                <p>Instalación y venta de sistemas de purificación.</p>
            </div>
        </div>
    </section>

    <!-- Sección de Servicios -->
    <section id="services" class="services" style="
        padding: 40px 20px;
        background-color: #ffffff;
        text-align: center;
    ">
        <h2 style="font-size: 2rem; color: #004080; margin-bottom: 20px;">Servicios Adicionales</h2>
        <p>Ofrecemos servicios de entrega a domicilio y mantenimiento de sistemas de purificación.</p>
        <ul style="
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
            color: #333;
            font-size: 1.1rem;
        ">
            <li>Entrega rápida y eficiente</li>
            <li>Mantenimiento periódico de equipos</li>
            <li>Asesoría sobre el uso adecuado del agua</li>
        </ul>
    </section>

    <!-- Sección de Contacto -->
    <section id="contact" class="contact" style="
        padding: 40px 20px;
        background-color: #e0f7ff;
        text-align: center;
    ">
        <h2 style="font-size: 2rem; color: #004080; margin-bottom: 20px;">Contáctenos</h2>
        <p>Si tiene alguna pregunta, no dude en contactarnos.</p>
        <form action="functions/auth.php" method="POST" style="
            max-width: 500px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        ">
            <label for="name" style="display: block; color: #333; margin-bottom: 5px;">Nombre:</label>
            <input type="text" id="name" name="name" required style="
                width: 100%;
                padding: 10px;
                border-radius: 5px;
                border: 1px solid #ccc;
                margin-bottom: 10px;
            ">

            <label for="email" style="display: block; color: #333; margin-bottom: 5px;">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required style="
                width: 100%;
                padding: 10px;
                border-radius: 5px;
                border: 1px solid #ccc;
                margin-bottom: 10px;
            ">

            <label for="message" style="display: block; color: #333; margin-bottom: 5px;">Mensaje:</label>
            <textarea id="message" name="message" rows="4" required style="
                width: 100%;
                padding: 10px;
                border-radius: 5px;
                border: 1px solid #ccc;
                margin-bottom: 10px;
            "></textarea>

            <button type="submit" style="
                padding: 10px 20px;
                background-color: #00a3cc;
                color: #ffffff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-weight: bold;
                transition: background-color 0.3s;
            ">Enviar</button>
        </form>
    </section>

    <?php include 'includes/footer.php'; ?> <!-- Incluir el Footer -->

    <script src="assets/js/scripts.js"></script> <!-- Enlace al JavaScript -->
</body>
</html>
