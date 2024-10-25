<?php
session_start();
require_once 'functions/pedidos.php';
require_once 'functions/db.php'; 

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if (!isset($_GET['id'])) {
    header('Location: ver_pedidos.php');
    exit();
}

$order_id = $_GET['id'];

$order = get_order_by_id($order_id);

if (!$order) {
    header('Location: ver_pedidos.php');
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_quantity = $_POST['quantity'];
    $new_status = $_POST['status'];

    
    update_order($order_id, $new_quantity, $new_status); 
    header('Location: ver_pedidos.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Editar Pedido - Distribuidora de Agua</title>
</head>
<body>
    <header>
        <?php include 'includes/header.php'; ?>
    </header>

    <main>
        <section class="edit-order">
            <h1>Editar Pedido</h1>
            <form method="POST" action="">
                <label for="quantity">Cantidad:</label>
                <input type="number" id="quantity" name="quantity" value="<?php echo $order['quantity']; ?>" required>
                
                <label for="status">Estado:</label>
                <select id="status" name="status" required>
                    <option value="Pendiente" <?php echo $order['status'] === 'Pendiente' ? 'selected' : ''; ?>>Pendiente</option>
                    <option value="Completado" <?php echo $order['status'] === 'Completado' ? 'selected' : ''; ?>>Completado</option>
                    <option value="Cancelado" <?php echo $order['status'] === 'Cancelado' ? 'selected' : ''; ?>>Cancelado</option>
                </select>
                
                <button type="submit">Actualizar Pedido</button>
            </form>
        </section>
    </main>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>

    <script src="assets/js/scripts.js"></script>
</body>
</html>
