<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Distribuidora de Agua</title>
    <link rel="stylesheet" href="../assets/css/styles.css"> <!-- CSS principal -->
</head>
<body>
    <?php include '../includes/header.php'; ?> <!-- Header -->

    <!-- Contacto Section -->
    <section id="contact" class="contacto" style="padding: 60px 0; text-align: center;">
        <div class="container" style="max-width: 600px; margin: auto;">
            <h2 style="font-size: 2rem; color: #004080; margin-bottom: 40px;">Contáctenos</h2>
            <p style="font-size: 1.1rem; margin-bottom: 20px;">
                Si tienes alguna pregunta o deseas más información sobre nuestros productos y servicios, no dudes en contactarnos. Estamos aquí para ayudarte.
            </p>
            <form action="../functions/auth.php" method="POST">
                <label for="name" style="display: block; margin-bottom: 10px;">Nombre:</label>
                <input type="text" id="name" name="name" required style="width: 100%; padding: 8px; margin-bottom: 20px;">

                <label for="email" style="display: block; margin-bottom: 10px;">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required style="width: 100%; padding: 8px; margin-bottom: 20px;">

                <label for="subject" style="display: block; margin-bottom: 10px;">Asunto:</label>
                <input type="text" id="subject" name="subject" required style="width: 100%; padding: 8px; margin-bottom: 20px;">

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
