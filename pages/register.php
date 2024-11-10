<?php
session_start(); // Iniciar la sesión
require_once 'functions/auth.php'; // Incluir el archivo de autenticación

// Manejar el envío del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = 'client'; // Rol predeterminado, se puede cambiar según las necesidades

    // Llamar a la función para registrar al usuario
    $registration_successful = register_user($email, $password, $role);

    if ($registration_successful) {
        $message = "Registro exitoso. Puedes iniciar sesión ahora.";
    } else {
        $error = "Error en el registro. El email ya está en uso o ha ocurrido un problema.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css"> <!-- Enlace a los estilos -->
    <title>Registro - Distribuidora de Agua</title>
</head>
<body>
    <header>
        <?php include 'includes/header.php'; ?> <!-- Incluir el header -->
    </header>

    <main>
        <section class="register-form">
            <h1>Registro de Usuario</h1>
            <?php if (isset($message)): ?>
                <div class="success-message"><?php echo $message; ?></div> <!-- Mostrar mensaje de éxito -->
            <?php endif; ?>
            <?php if (isset($error)): ?>
                <div class="error-message"><?php echo $error; ?></div> <!-- Mostrar mensaje de error -->
            <?php endif; ?>
            <form action="register.php" method="POST">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn">Registrarse</button>
                <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a></p> <!-- Enlace a inicio de sesión -->
            </form>
        </section>
    </main>

    <footer>
        <?php include 'includes/footer.php'; ?> <!-- Incluir el footer -->
    </footer>

    <script src="assets/js/scripts.js"></script> <!-- Enlace al script -->
</body>
</html>