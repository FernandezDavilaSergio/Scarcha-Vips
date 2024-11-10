<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <style>
        /* Styles for the card design and layout */
        .catalogo-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .card {
            width: 220px;
            background: white;
            padding: 1em;
            border-radius: 10px;
            margin: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-image {
            background-color: rgb(236, 236, 236);
            width: 100%;
            height: 150px;
            border-radius: 10px 10px 0 0;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .category {
            text-transform: uppercase;
            font-size: 0.7em;
            font-weight: 600;
            color: rgb(63, 121, 230);
            padding: 10px 7px 0;
        }

        .heading {
            font-weight: 600;
            color: rgb(88, 87, 87);
            padding: 7px;
        }

        .author {
            color: gray;
            font-weight: 400;
            font-size: 11px;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <section id="catalogo" class="catalogo">
        <div class="container">
            <h2>Catálogo de Productos</h2>
            <div class="catalogo-grid">
                <!-- Card for Botellón de Agua 20L -->
                <div class="catalogo-item card">
                    <div class="card-image"><img src="assets/images/botellon20L.jpg" alt="Botellón de Agua 20L" class="catalogo-img"></div>
                    <div class="category">Producto destacado</div>
                    <div class="heading">Botellón de Agua 20L
                        <div class="author">Precio: 20 Bs</div>
                    </div>
                </div>

                <!-- Card for Botellón de Agua 2L -->
                <div class="catalogo-item card">
                    <div class="card-image"><img src="assets/images/botellon2L.jpg" alt="Botellón de Agua 2L" class="catalogo-img"></div>
                    <div class="category">Producto básico</div>
                    <div class="heading">Botellón de Agua 2L
                        <div class="author">Precio: 10 Bs</div>
                    </div>
                </div>

                <!-- Card for Paquete de Botellas de Agua 2L -->
                <div class="catalogo-item card">
                    <div class="card-image"><img src="assets/images/paqueteBotellas2L.jpg" alt="Paquete de Botellas de Agua 2L" class="catalogo-img"></div>
                    <div class="category">Paquete económico</div>
                    <div class="heading">Paquete de Botellas de Agua 2L
                        <div class="author">Precio: 15 Bs</div>
                    </div>
                </div>

                <!-- Card for Hielos 2kg -->
                <div class="catalogo-item card">
                    <div class="card-image"><img src="assets/images/hielos2kg.jpg" alt="Hielos 2kg" class="catalogo-img"></div>
                    <div class="category">Accesorio para fiestas</div>
                    <div class="heading">Hielos 2kg
                        <div class="author">Precio: 5 Bs</div>
                    </div>
                </div>

                <!-- Card for Hielos 1kg -->
                <div class="catalogo-item card">
                    <div class="card-image"><img src="assets/images/hielos1kg.jpg" alt="Hielos 1kg" class="catalogo-img"></div>
                    <div class="category">Refrigeración rápida</div>
                    <div class="heading">Hielos 1kg
                        <div class="author">Precio: 4 Bs</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?>
</body>
</html>