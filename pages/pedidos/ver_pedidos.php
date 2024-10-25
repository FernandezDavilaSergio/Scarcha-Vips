<?php
session_start(); // Iniciar la sesión
require_once 'functions/pedidos.php'; // Incluir las funciones relacionadas con pedidos
require_once 'functions/db.php'; // Incluir la conexión a la base de datos


if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); 
    exit();
}


$user_id = $_SESSION['user_id'];
$orders = get_user_orders($user_id); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Ver Mis Pedidos - Distribuidora de Agua</title>
</head>
<body>
    <header>
        <?php include 'includes/header.php'; ?> 
    </header>

    <main>
        <section class="orders-list">
            <h1>Mis Pedidos</h1>
            <?php if (empty($orders)): ?>
                <p>No tienes pedidos registrados.</p>
            <?php else: ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID Pedido</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orders as $order): ?>
                            <tr>
                                <td><?php echo $order['id']; ?></td>
                                <td><?php echo $order['product_name']; ?></td>
                                <td><?php echo $order['quantity']; ?></td>
                                <td><?php echo date('d/m/Y', strtotime($order['order_date'])); ?></td>
                                <td><?php echo $order['status']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </section>
    </main>

    <footer>
        <?php include 'includes/footer.php'; ?> 
    </footer>

    <script src="assets/js/scripts.js"></script> 
</body>
</html>