<?php
// Configuración de la base de datos
$host = 'localhost'; // Servidor de base de datos
$user = 'root';      // Usuario de la base de datos (por defecto en XAMPP)
$password = '';      // Contraseña de la base de datos (por defecto en XAMPP suele estar vacía)
$dbname = 'distribuidora_agua'; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
