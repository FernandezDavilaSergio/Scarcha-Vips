<?php
include_once "../includes/header.php";
include_once "../sistemaPedidos/conexion.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-900">

<section id="catalogo" class="py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-blue-800 mb-10">Catálogo de Productos</h2>
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <?php
            $query = mysqli_query($conexion, "SELECT * FROM producto");
            if (mysqli_num_rows($query) > 0) {
                while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                    <div class="bg-white shadow-md rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                        <div class="bg-gray-200 h-56">
                            <!-- Si tienes imágenes en la base de datos, cámbialo para cargar la imagen correspondiente -->
                            <img src="../assets/images/default_product.jpg" alt="<?php echo $data['descripcion']; ?>" class="object-cover h-full w-full">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2"><?php echo $data['descripcion']; ?></h3>
                            <p class="text-sm text-gray-600 mb-4">Precio: <span class="font-medium text-blue-600"><?php echo $data['precio']; ?> Bs</span></p>
                            <p class="text-sm text-gray-600 mb-4">Stock: <span class="font-medium"><?php echo $data['existencia']; ?> unidades</span></p>
                            <p class="text-sm text-gray-600 mb-4">Costo de Producción: <span class="font-medium"><?php echo $data['costo_produccion']; ?> Bs</span></p>
                            <div class="flex justify-end">
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300">Ver más</button>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p class='text-center text-gray-600'>No hay productos disponibles.</p>";
            }
            ?>
        </div>
    </div>
</section>

<?php include_once "../includes/footer.php"; ?>

</body>
</html>
