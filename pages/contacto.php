<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Distribuidora de Agua</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <?php include '../includes/header.php'; ?> <!-- Header -->

    <section id="contact" class="py-12 px-4">
        <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-center text-blue-800 mb-6">Contáctenos</h2>
            <p class="text-center text-gray-600 mb-8">
                Si tienes alguna pregunta o deseas más información sobre nuestros productos y servicios, no dudes en contactarnos. Estamos aquí para ayudarte.
            </p>
            
            <!-- Mostrar mensajes de confirmación -->
            <?php if (isset($_GET['status'])): ?>
                <?php if ($_GET['status'] == 'success'): ?>
                    <div class="bg-green-100 text-green-800 p-4 rounded-md mb-6 text-center">
                        ¡Tu mensaje ha sido enviado exitosamente!
                    </div>
                <?php elseif ($_GET['status'] == 'error'): ?>
                    <div class="bg-red-100 text-red-800 p-4 rounded-md mb-6 text-center">
                        Hubo un error al enviar tu mensaje. Por favor, inténtalo de nuevo.
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <!-- Formulario de contacto -->
            <form action="../pages/procesar_contacto.php" method="POST" class="space-y-6">
                <div class="space-y-2">
                    <label for="name" class="block text-gray-700 font-semibold">Nombre Completo:</label>
                    <input type="text" id="name" name="nombre" required placeholder="Ingresa tu nombre completo" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>

                <div class="space-y-2">
                    <label for="email" class="block text-gray-700 font-semibold">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required placeholder="ejemplo@correo.com" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>

                <div class="space-y-2">
                    <label for="phone" class="block text-gray-700 font-semibold">Teléfono:</label>
                    <input type="tel" id="phone" name="telefono" required placeholder="+591 70000000" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>

                <div class="space-y-2">
                    <label for="subject" class="block text-gray-700 font-semibold">Asunto:</label>
                    <select id="subject" name="asunto" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
                        <option value="" disabled selected>Selecciona un asunto</option>
                        <option value="consultas_productos">Consultas sobre productos</option>
                        <option value="servicio_entrega">Servicio de entrega</option>
                        <option value="sugerencias">Sugerencias</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>

                <div class="space-y-2">
                    <label for="message" class="block text-gray-700 font-semibold">Mensaje:</label>
                    <textarea id="message" name="mensaje" rows="4" required placeholder="Escribe tu mensaje aquí" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"></textarea>
                </div>

                <button type="submit" class="w-full bg-blue-800 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600">Enviar</button>
            </form>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?> <!-- Footer -->
</body>
</html>
