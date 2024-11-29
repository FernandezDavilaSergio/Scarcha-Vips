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
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body class="bg-gray-50 text-gray-900">

    <section id="catalogo" class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-blue-800 mb-10">Catálogo de Productos</h2>

            <!-- Búsqueda -->
            <form method="GET" class="mb-6">
                <div class="flex items-center justify-center">
                    <input type="text" name="buscar" placeholder="Buscar producto..." value="<?php echo $_GET['buscar'] ?? ''; ?>"
                        class="w-full max-w-md px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <button type="submit" class="ml-2 bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300">Buscar</button>
                </div>
            </form>

            <!-- Productos -->
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <?php
                $buscar = $_GET['buscar'] ?? '';
                $sql = "SELECT * FROM producto";
                if (!empty($buscar)) {
                    $sql .= " WHERE descripcion LIKE '%$buscar%'";
                }
                $query = mysqli_query($conexion, $sql);

                if (mysqli_num_rows($query) > 0) {
                    while ($data = mysqli_fetch_assoc($query)) {
                ?>
                        <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2"><?php echo $data['descripcion']; ?></h3>
                            <p class="text-sm text-gray-600 mb-2">Precio: <span class="font-medium text-blue-600"><?php echo $data['precio']; ?> Bs</span></p>
                            <p class="text-sm text-gray-600 mb-2">Stock disponible: <span class="font-medium"><?php echo $data['existencia']; ?> unidades</span></p>
                            <p class="text-sm text-gray-600">Código del producto: <span class="font-medium"><?php echo $data['codproducto']; ?></span></p>
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