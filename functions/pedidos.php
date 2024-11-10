<?php
require_once 'db.php'; // Incluir conexión a la base de datos

/**
 * Crea un nuevo pedido en la base de datos.
 *
 * @param int $usuario_id El ID del usuario que realiza el pedido.
 * @param string $producto El nombre del producto solicitado.
 * @param int $cantidad La cantidad del producto solicitado.
 * @param string $direccion La dirección de entrega del pedido.
 * @return bool Verdadero si el pedido fue creado exitosamente, falso de lo contrario.
 */
function crearPedido($usuario_id, $producto, $cantidad, $direccion) {
    global $conn;

    // Prepara la consulta de inserción
    $query = "INSERT INTO pedidos (usuario_id, producto, cantidad, direccion, estado) VALUES (?, ?, ?, ?, 'Pendiente')";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("issi", $usuario_id, $producto, $cantidad, $direccion);
    return $stmt->execute(); // Devuelve verdadero si la inserción fue exitosa
}

/**
 * Obtiene todos los pedidos de la base de datos.
 *
 * @return array Arreglo con los pedidos.
 */
function obtenerPedidos() {
    global $conn;

    $query = "SELECT * FROM pedidos";
    $result = $conn->query($query);

    $pedidos = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $pedidos[] = $row; // Agrega cada pedido al arreglo
        }
    }
    return $pedidos; // Devuelve el arreglo de pedidos
}

/**
 * Obtiene un pedido específico por su ID.
 *
 * @param int $pedido_id El ID del pedido.
 * @return array|null El pedido encontrado o null si no existe.
 */
function obtenerPedidoPorId($pedido_id) {
    global $conn;

    $query = "SELECT * FROM pedidos WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $pedido_id);
    $stmt->execute();
    $result = $stmt->get_result();

    return $result->fetch_assoc(); // Devuelve el pedido encontrado o null
}

/**
 * Actualiza un pedido en la base de datos.
 *
 * @param int $pedido_id El ID del pedido a actualizar.
 * @param string $estado El nuevo estado del pedido.
 * @return bool Verdadero si la actualización fue exitosa, falso de lo contrario.
 */
function actualizarPedido($pedido_id, $estado) {
    global $conn;

    // Prepara la consulta de actualización
    $query = "UPDATE pedidos SET estado = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $estado, $pedido_id);
    return $stmt->execute(); // Devuelve verdadero si la actualización fue exitosa
}

/**
 * Elimina un pedido de la base de datos.
 *
 * @param int $pedido_id El ID del pedido a eliminar.
 * @return bool Verdadero si la eliminación fue exitosa, falso de lo contrario.
 */
function eliminarPedido($pedido_id) {
    global $conn;

    // Prepara la consulta de eliminación
    $query = "DELETE FROM pedidos WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $pedido_id);
    return $stmt->execute(); // Devuelve verdadero si la eliminación fue exitosa
}
?>
