<?php
session_start(); // Iniciar la sesión
require_once 'functions/pedidos.php'; // Incluir funciones de pedidos
require_once 'functions/db.php'; // Incluir conexión a la base de datos

// Verificar si el usuario está autenticado y es administrador
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php'); // Redirigir al login si no está autenticado
    exit();
}

// Obtener todos los pedidos desde la base de datos
$orders = get_all_orders(); // Función para obtener todos los pedidos
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css"> <!-- Enlace a los estilos -->
    <title>Ver Pedidos - Admin - Distribuidora de Agua</title>
</head>
<body>
    <header>
        <?php include 'includes/header.php'; ?> <!-- Incluir el header -->
    </header>

    <main>
        <section class="admin-orders">
            <h1>Pedidos</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Cantidad</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order): ?>
                        <tr>
                            <td><?php echo $order['id']; ?></td>
                            <td><?php echo $order['user_id']; ?></td>
                            <td><?php echo $order['quantity']; ?></td>
                            <td><?php echo $order['status']; ?></td>
                            <td>
                                <a href="editar_pedidos.php?id=<?php echo $order['id']; ?>">Editar</a>
                                <a href="functions/pedidos.php?action=complete&id=<?php echo $order['id']; ?>">Marcar como Completado</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <?php include 'includes/footer.php'; ?> <!-- Incluir el footer -->
    </footer>

    <script src="assets/js/scripts.js"></script> <!-- Enlace al script -->
</body>
</html>
