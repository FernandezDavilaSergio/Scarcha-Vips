<?php
session_start(); // Iniciar la sesión
require_once 'functions/pedidos.php'; // Incluir las funciones relacionadas con pedidos
require_once 'functions/db.php'; // Incluir la conexión a la base de datos

// Verificar si el usuario está autenticado
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirigir al login si no está autenticado
    exit();
}

// Manejar el envío del pedido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $user_id = $_SESSION['user_id'];

    // Llamar a la función para crear un nuevo pedido
    $order_successful = create_order($user_id, $product_id, $quantity);

    if ($order_successful) {
        $message = "Pedido realizado con éxito.";
    } else {
        $error = "Error al realizar el pedido. Por favor, intenta nuevamente.";
    }
}

// Obtener la lista de productos
$products = get_products(); // Función para obtener los productos desde la base de datos
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css"> <!-- Enlace a los estilos -->
    <title>Hacer Pedido - Distribuidora de Agua</title>
</head>
<body>
    <header>
        <?php include 'includes/header.php'; ?> <!-- Incluir el header -->
    </header>

    <main>
        <section class="order-form">
            <h1>Hacer un Pedido</h1>
            <?php if (isset($message)): ?>
                <div class="success-message"><?php echo $message; ?></div> <!-- Mostrar mensaje de éxito -->
            <?php endif; ?>
            <?php if (isset($error)): ?>
                <div class="error-message"><?php echo $error; ?></div> <!-- Mostrar mensaje de error -->
            <?php endif; ?>
            <form action="hacer_pedido.php" method="POST">
                <div class="form-group">
                    <label for="product_id">Selecciona un Producto:</label>
                    <select id="product_id" name="product_id" required>
                        <option value="">-- Selecciona un producto --</option>
                        <?php foreach ($products as $product): ?>
                            <option value="<?php echo $product['id']; ?>"><?php echo $product['name']; ?> - $<?php echo $product['price']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="quantity">Cantidad:</label>
                    <input type="number" id="quantity" name="quantity" min="1" required>
                </div>
                <button type="submit" class="btn">Realizar Pedido</button>
            </form>
        </section>
    </main>

    <footer>
        <?php include 'includes/footer.php'; ?> <!-- Incluir el footer -->
    </footer>

    <script src="assets/js/scripts.js"></script> <!-- Enlace al script -->
</body>
</html>
