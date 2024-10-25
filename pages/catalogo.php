<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <section id="catalogo" class="catalogo">
        <div class="container">
            <h2>Catálogo de Productos</h2>
            <div class="catalogo-grid">
                <!-- Tarjeta de Producto -->
                <div class="catalogo-item card">
                    <img src="assets/images/botella.jpg" alt="Botella de Agua" class="catalogo-img">
                    <h3>Botella de Agua</h3>
                    <p>Botellas de agua purificada de 500 ml y 1 litro.</p>
                    <button class="btn">Agregar al Carrito</button>
                </div>
                <div class="catalogo-item card">
                    <img src="assets/images/garrafon.jpg" alt="Garrafón de Agua" class="catalogo-img">
                    <h3>Garrafón de Agua</h3>
                    <p>Garrafones de 10 y 20 litros para grandes consumos.</p>
                    <button class="btn">Agregar al Carrito</button>
                </div>
                <div class="catalogo-item card">
                    <img src="assets/images/purificador.jpg" alt="Sistema de Purificación" class="catalogo-img">
                    <h3>Sistema de Purificación</h3>
                    <p>Instalación y venta de sistemas de purificación domésticos.</p>
                    <button class="btn">Ver más</button>
                </div>
                <!-- Agrega más productos según sea necesario -->
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
