<?php
session_start(); // Iniciar la sesión
require_once 'functions/db.php'; // Incluir conexión a la base de datos
require_once 'functions/pedidos.php'; // Incluir funciones de pedidos
require_once 'functions/auth.php'; // Incluir funciones de autenticación

// Verificar si el usuario está autenticado y es administrador
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php'); // Redirigir al login si no está autenticado
    exit();
}

// Obtener estadísticas
$total_orders = get_total_orders(); // Total de pedidos
$pending_orders = get_pending_orders(); // Pedidos pendientes
$completed_orders = get_completed_orders(); // Pedidos completados
$total_users = get_total_users(); // Total de usuarios registrados
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css"> <!-- Enlace a los estilos -->
    <title>Dashboard - Admin - Distribuidora de Agua</title>
</head>
<body>
    <header>
        <?php include 'includes/header.php'; ?> <!-- Incluir el header -->
    </header>

    <main>
        <section class="admin-dashboard">
            <h1>Dashboard del Administrador</h1>
            <div class="dashboard-stats">
                <div class="stat-card">
                    <h2>Total de Pedidos</h2>
                    <p><?php echo $total_orders; ?></p>
                </div>
                <div class="stat-card">
                    <h2>Pedidos Pendientes</h2>
                    <p><?php echo $pending_orders; ?></p>
                </div>
                <div class="stat-card">
                    <h2>Pedidos Completados</h2>
                    <p><?php echo $completed_orders; ?></p>
                </div>
                <div class="stat-card">
                    <h2>Total de Usuarios</h2>
                    <p><?php echo $total_users; ?></p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <?php include 'includes/footer.php'; ?> <!-- Incluir el footer -->
    </footer>

    <script src="assets/js/scripts.js"></script> <!-- Enlace al script -->
</body>
</html>