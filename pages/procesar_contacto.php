<?php
// Incluir la conexión a la base de datos
include_once "../sistemaPedidos/conexion.php";

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capturar datos del formulario
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
    $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
    $asunto = mysqli_real_escape_string($conexion, $_POST['asunto']);
    $mensaje = mysqli_real_escape_string($conexion, $_POST['mensaje']);

    // Insertar datos en la tabla contacto
    $sql = "INSERT INTO contacto (nombre, email, telefono, asunto, mensaje) VALUES ('$nombre', '$email', '$telefono', '$asunto', '$mensaje')";

    if (mysqli_query($conexion, $sql)) {
        // Redirigir con mensaje de éxito
        header("Location: ../pages/contacto.php?status=success");
    } else {
        // Redirigir con mensaje de error
        header("Location: ../pages/contacto.php?status=error");
    }
} else {
    // Si no es una solicitud POST, redirigir al formulario
    header("Location: ../pages/contacto.php");
}
