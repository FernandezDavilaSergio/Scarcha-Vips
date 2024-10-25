<?php
require_once 'db.php'; // Incluir conexión a la base de datos

/**
 * Inicia sesión para el usuario.
 *
 * @param string $email El correo electrónico del usuario.
 * @param string $password La contraseña del usuario.
 * @return bool Verdadero si el inicio de sesión fue exitoso, falso de lo contrario.
 */
function login($email, $password) {
    global $conn;

    // Prepara la consulta para evitar inyecciones SQL
    $query = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica si se encontró un usuario con ese email
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verifica la contraseña
        if (password_verify($password, $user['password'])) {
            // Almacena la información del usuario en la sesión
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['nombre'];
            return true; // Inicio de sesión exitoso
        }
    }
    return false; // Credenciales inválidas
}

/**
 * Registra un nuevo usuario.
 *
 * @param string $nombre El nombre del usuario.
 * @param string $email El correo electrónico del usuario.
 * @param string $telefono El teléfono del usuario.
 * @param string $direccion La dirección del usuario.
 * @param string $password La contraseña del usuario.
 * @return bool Verdadero si el registro fue exitoso, falso de lo contrario.
 */
function register($nombre, $email, $telefono, $direccion, $password) {
    global $conn;

    // Verifica si el email ya está registrado
    $query = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return false; // El email ya está registrado
    }

    // Hash de la contraseña para almacenarla de forma segura
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepara la consulta de inserción
    $query = "INSERT INTO usuarios (nombre, email, telefono, direccion, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssss", $nombre, $email, $telefono, $direccion, $hashed_password);
    return $stmt->execute(); // Devuelve verdadero si la inserción fue exitosa
}

/**
 * Cierra sesión del usuario.
 */
function logout() {
    session_start();
    session_unset(); // Elimina todas las variables de sesión
    session_destroy(); // Destruye la sesión
}
?>
