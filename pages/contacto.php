<?php
session_start(); // Iniciar la sesión
require_once 'functions/db.php'; // Incluir conexión a la base de datos

// Información de contacto de la empresa
$empresa_info = [
    'nombre' => 'Scarcha VIP\'s - Distribuidora de Agua',
    'direccion' => 'Av. Central 456, Zona Industrial, Ciudad, País',
    'telefono' => '(+591) 789-12345',
    'email' => 'contacto@scarchavips.com'
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css"> <!-- Enlace a los estilos -->
    <title>Contacto - Scarcha VIP's</title>
</head>
<body>
    <header>
        <?php include 'includes/header.php'; ?> <!-- Incluir el header -->
    </header>

    <main>
        <section class="contacto container">
            <h1>Contáctanos</h1>

            <div class="contact-info card">
                <h2>Información de Contacto</h2>
                <p><strong>Nombre:</strong> <?php echo $empresa_info['nombre']; ?></p>
                <p><strong>Dirección:</strong> <?php echo $empresa_info['direccion']; ?></p>
                <p><strong>Teléfono:</strong> <?php echo $empresa_info['telefono']; ?></p>
                <p><strong>Email:</strong> <a href="mailto:<?php echo $empresa_info['email']; ?>"><?php echo $empresa_info['email']; ?></a></p>
            </div>

            <div class="contact-form card">
                <h2>Envíanos un Mensaje</h2>
                <form action="functions/enviar_mensaje.php" method="post">
                    <label for="nombre">Tu Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ej. Juan Pérez" required>

                    <label for="email">Tu Email:</label>
                    <input type="email" id="email" name="email" placeholder="Ej. correo@dominio.com" required>

                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" placeholder="Escribe aquí tu mensaje..." required></textarea>

                    <button type="submit" class="btn-enviar">Enviar Mensaje</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <?php include 'includes/footer.php'; ?> <!-- Incluir el footer -->
    </footer>

    <script src="assets/js/scripts.js"></script> <!-- Enlace al script -->
</body>
</html>
