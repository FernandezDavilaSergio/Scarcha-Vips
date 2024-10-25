<?php
session_start(); 
require_once 'functions/auth.php'; 

if (isset($_SESSION['user_id'])) {
    header('Location: pages/home.php');
    exit();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $user = authenticate_user($email, $password);

    if ($user) {

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role']; 


        if ($user['role'] === 'admin') {
            header('Location: pages/pedidos/admin_dashboard.php');
        } else {
            header('Location: pages/pedidos/hacer_pedido.php');
        }
        exit();
    } else {
        $error = "Email o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Iniciar Sesión - Distribuidora de Agua</title>
</head>
<body>
    <header>
        <?php include 'includes/header.php'; ?>
    </header>

    <main>
        <section class="login-form">
            <h1>Iniciar Sesión</h1>
            <?php if (isset($error)): ?>
                <div class="error-message"><?php echo $error; ?></div>
            <?php endif; ?>
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn">Iniciar Sesión</button>
                <p>No tienes una cuenta? <a href="register.php">Regístrate aquí</a></p>
            </form>
        </section>
    </main>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>

    <script src="assets/js/scripts.js"></script>
</body>
</html>
