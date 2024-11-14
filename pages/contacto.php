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
    <section id="contact" class="contacto">
        <div class="container contact-container">
            <h2>Contáctenos</h2>
            <p class="contact-description">
                Si tienes alguna pregunta o deseas más información sobre nuestros productos y servicios, no dudes en contactarnos. Estamos aquí para ayudarte.
            </p>
            <form action="../functions/auth.php" method="POST" class="contact-form">
                <div class="form-group">
                    <label for="name">Nombre Completo:</label>
                    <input type="text" id="name" name="name" required placeholder="Ingresa tu nombre completo">
                </div>
                
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required placeholder="ejemplo@correo.com">
                </div>

                <div class="form-group">
                    <label for="phone">Teléfono:</label>
                    <input type="tel" id="phone" name="phone" required placeholder="+591 70000000">
                </div>

                <div class="form-group">
                    <label for="subject">Asunto:</label>
                    <select id="subject" name="subject" required>
                        <option value="" disabled selected>Selecciona un asunto</option>
                        <option value="consultas_productos">Consultas sobre productos</option>
                        <option value="servicio_entrega">Servicio de entrega</option>
                        <option value="sugerencias">Sugerencias</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" rows="4" required placeholder="Escribe tu mensaje aquí"></textarea>
                </div>

                <button type="submit" class="btn-submit">Enviar</button>
            </form>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?> <!-- Footer -->

    <script src="../assets/js/scripts.js"></script>
</body>
</html>
