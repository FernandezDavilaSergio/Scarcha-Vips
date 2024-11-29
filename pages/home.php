<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scarcha Vips - Agua y Hielo a Domicilio en La Paz</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../assets/css/styles.css">
    
    <style>
        .swiper {
            width: 100%;
            height: 500px;
        }
        .gradient-overlay {
            background: linear-gradient(to right, rgba(59, 130, 246, 0.8), rgba(37, 99, 235, 0.8));
        }
        .card-hover:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans text-gray-800">
    <?php include '../includes/header.php'; ?>

    <!-- Hero Carousel -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide relative">
                <div class="absolute inset-0 bg-black opacity-50"></div>
                <img src="../assets/img/banerprincipal.jpeg" class="w-full h-full object-cover">
                <div class="absolute inset-0 flex items-center justify-center text-white text-center">
                    <div class="max-w-4xl px-4">
                        <h1 class="text-5xl md:text-6xl font-bold mb-4">Scarcha Vips</h1>
                        <p class="text-xl md:text-2xl">Agua y Hielo a Domicilio en La Paz</p>
                        <button class="mt-8 px-8 py-3 bg-blue-600 hover:bg-blue-700 rounded-full text-lg transition duration-300">
                            Ordenar Ahora
                        </button>
                    </div>
                </div>
            </div>
            <!-- Agregar más slides según necesidad -->
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- Características -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="flex items-center space-x-4 p-6 rounded-lg bg-blue-50">
                    <i class="fas fa-truck text-3xl text-blue-600"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Entrega Rápida</h3>
                        <p class="text-gray-600">Servicio a domicilio en toda La Paz</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4 p-6 rounded-lg bg-blue-50">
                    <i class="fas fa-water text-3xl text-blue-600"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Agua Purificada</h3>
                        <p class="text-gray-600">Máxima calidad garantizada</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4 p-6 rounded-lg bg-blue-50">
                    <i class="fas fa-headset text-3xl text-blue-600"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Atención 24/7</h3>
                        <p class="text-gray-600">Soporte continuo</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Productos -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Nuestros Productos</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card-hover bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="h-48 overflow-hidden">
                        <img src="../assets/img/botella.jpg" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Botellas de Agua</h3>
                        <p class="text-gray-600 mb-4">Agua purificada en presentaciones de 500 ml y 1 litro</p>
                        <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                            Ver Detalles
                        </button>
                    </div>
                </div>
                <!-- Repetir para otros productos -->
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Lo que dicen nuestros clientes</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-blue-50 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400">
                            ★★★★★
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"Excelente servicio y calidad. Siempre puntuales con las entregas."</p>
                    <p class="font-semibold">- María González</p>
                </div>
                <!-- Repetir para otros testimonios -->
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-blue-600">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-white mb-8">¿Listo para ordenar?</h2>
            <p class="text-xl text-white mb-8">Realiza tu pedido ahora y recíbelo en la puerta de tu casa</p>
            <button class="bg-white text-blue-600 px-8 py-3 rounded-full text-lg font-semibold hover:bg-gray-100 transition duration-300">
                Hacer Pedido
            </button>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?>

    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
        });
    </script>
</body>
</html>