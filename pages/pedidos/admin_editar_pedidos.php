<?php
session_start(); // Iniciar la sesión
require_once 'functions/pedidos.php'; // Incluir funciones de pedidos
require_once 'functions/db.php'; // Incluir conexión a la base de datos

// Verificar si el usuario está autenticado y es administrador
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php'); // Redirigir al login si no está autenticado
    exit();
}

// Verificar si se ha proporcionado un ID de pedido
if (!isset($_GET['id'])) {
    header('Location: admin_ver_pedidos.php'); // Redirigir si no se proporciona el ID
    exit();
}

$order_id = intval($_GET['id']); // Obtener el ID del pedido
$order = get_order_by_id($order_id); // Función para obtener los detalles del pedido

// Verificar si el pedido existe
if (!$order) {
    header('Location: admin_ver_pedidos.php'); // Redirigir si el pedido no existe
    exit();
}

// Manejo del formulario al enviar cambios
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $quantity = intval($_POST['quantity']);
    $status = $_POST['status'];

    // Función para actualizar el pedido
    update_order($order_id, $quantity, $status);
    header('Location: admin_ver_pedidos.php'); // Redirigir después de actualizar
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css"> <!-- Enlace a los estilos -->
    <title>Editar Pedido - Admin - Distribuidora de Agua</title>
</head>
<body>
    <header>
        <?php include 'includes/header.php'; ?> <!-- Incluir el header -->
    </header>

    <main>
        <section class="admin-edit-order">
            <h1>Editar Pedido #<?php echo $order['id']; ?></h1>
            <form method="POST">
                <label for="quantity">Cantidad:</label>
                <input type="number" id="quantity" name="quantity" value="<?php echo $order['quantity']; ?>" required>
                
                <label for="status">Estado:</label>
                <select id="status" name="status">
                    <option value="pendiente" <?php echo $order['status'] === 'pendiente' ? 'selected' : ''; ?>>Pendiente</option>
                    <option value="completado" <?php echo $order['status'] === 'completado' ? 'selected' : ''; ?>>Completado</option>
                    <option value="cancelado" <?php echo $order['status'] === 'cancelado' ? 'selected' : ''; ?>>Cancelado</option>
                </select>
                
                <button type="submit">Guardar Cambios</button>
            </form>
        </section>
    </main>

    <footer>
        <?php include 'includes/footer.php'; ?> <!-- Incluir el footer -->
    </footer>

    <script src="assets/js/scripts.js"></script> <!-- Enlace al script -->
</body>
</html>
