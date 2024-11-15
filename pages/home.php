<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scarcha Vips - Agua y Hielo a Domicilio en La Paz</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans text-gray-800">

    <?php include '../includes/header.php'; ?> <!-- Header -->

    <!-- Hero Section -->
    <section id="home" class="hero bg-cover bg-center h-96 flex items-center justify-center" style="background-image: url('../assets/img/banerprincipal.jpeg');">
        <div class="bg-black bg-opacity-50 w-full h-full flex flex-col items-center justify-center text-white text-center p-4">
            <h1 class="text-5xl font-bold">Scarcha Vips</h1>
            <p class="text-xl mt-2">Agua y Hielo a Domicilio en La Paz</p>
        </div>
    </section>

    <!-- Compromiso Section -->
    <section id="compromiso" class="compromiso section py-16 bg-white">
        <div class="container mx-auto text-center max-w-3xl">
            <h2 class="text-3xl text-blue-800 mb-4">Nuestro Compromiso</h2>
            <p class="text-lg text-gray-700">En <strong>Scarcha Vips</strong>, trabajamos cada día para llevar a tu puerta agua purificada y hielo de la mejor calidad. Nos dedicamos a satisfacer las necesidades de hidratación de nuestros clientes en La Paz con un servicio rápido, confiable y accesible.</p>
        </div>
    </section>

    <!-- Productos Section -->
    <section id="productos" class="productos section py-16 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="text-3xl text-center text-blue-800 mb-10">Nuestros Productos</h2>
            <div class="flex flex-wrap gap-6 justify-center">
                <div class="card bg-white p-6 rounded-lg shadow-lg max-w-sm text-center">
                    <h3 class="text-2xl font-semibold text-blue-800 mb-3">Botellas de Agua</h3>
                    <p class="text-gray-700 mb-4">Agua purificada en presentaciones de 500 ml y 1 litro, ideal para el consumo diario de toda la familia.</p>
                    <button class="btn-submit">Ver más</button>
                </div>
                <div class="card bg-white p-6 rounded-lg shadow-lg max-w-sm text-center">
                    <h3 class="text-2xl font-semibold text-blue-800 mb-3">Garrafones</h3>
                    <p class="text-gray-700 mb-4">Agua purificada en garrafones de 10 y 20 litros, con opción de entrega semanal a domicilio.</p>
                    <button class="btn-submit">Ver más</button>
                </div>
                <div class="card bg-white p-6 rounded-lg shadow-lg max-w-sm text-center">
                    <h3 class="text-2xl font-semibold text-blue-800 mb-3">Hielo Cristalino</h3>
                    <p class="text-gray-700 mb-4">Hielo limpio y cristalino, ideal para bebidas y eventos, entregado en bolsas de distintos tamaños.</p>
                    <button class="btn-submit">Ver más</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios Section -->
    <section id="servicios" class="servicios section py-16 bg-white">
        <div class="container mx-auto">
            <h2 class="text-3xl text-center text-blue-800 mb-10">Servicios Adicionales</h2>
            <div class="flex flex-wrap gap-6 justify-center">
                <div class="card bg-white p-6 rounded-lg shadow-lg max-w-sm text-center">
                    <i class="icon-delivery text-4xl text-blue-800 mb-3"></i>
                    <p class="text-gray-700">Entrega a domicilio rápida y segura en toda La Paz</p>
                </div>
                <div class="card bg-white p-6 rounded-lg shadow-lg max-w-sm text-center">
                    <i class="icon-purification text-4xl text-blue-800 mb-3"></i>
                    <p class="text-gray-700">Mantenimiento y asesoría sobre sistemas de purificación de agua</p>
                </div>
                <div class="card bg-white p-6 rounded-lg shadow-lg max-w-sm text-center">
                    <i class="icon-support text-4xl text-blue-800 mb-3"></i>
                    <p class="text-gray-700">Atención personalizada para adaptarnos a tus necesidades</p>
                </div>
            </div>
        </div>
    </section>

    

    <?php include '../includes/footer.php'; ?>

</body>
</html>
