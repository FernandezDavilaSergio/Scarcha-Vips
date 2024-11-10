<?php
include_once "../conexion.php"; // Asegúrate de que esta ruta sea correcta

function obtenerTotalUsuarios() {
    global $conexion; // Se asume que $conexion es una variable global que contiene la conexión a la base de datos

    // Consulta para obtener el total de usuarios
    $query = "SELECT COUNT(*) as total FROM usuarios";

    // Preparar la consulta
    $statement = mysqli_prepare($conexion, $query);
    
    // Verificar si la preparación de la consulta fue exitosa
    if ($statement === false) {
        // Manejar el error de preparación de consulta
        // Esto podría incluir registrar el error, mostrar un mensaje de error, etc.
        exit("Error al preparar la consulta: " . mysqli_error($conexion));
    }
    
    // Ejecutar la consulta preparada
    $success = mysqli_stmt_execute($statement);
    
    // Verificar si la ejecución de la consulta fue exitosa
    if ($success === false) {
        // Manejar el error de ejecución de consulta
        // Esto podría incluir registrar el error, mostrar un mensaje de error, etc.
        exit("Error al ejecutar la consulta: " . mysqli_stmt_error($statement));
    }
    
    // Vincular el resultado de la consulta a una variable
    mysqli_stmt_bind_result($statement, $total);
    
    // Obtener el resultado de la consulta
    mysqli_stmt_fetch($statement);
    
    // Cerrar la consulta preparada
    mysqli_stmt_close($statement);
    
    // Liberar los resultados de la consulta (necesario si se van a ejecutar múltiples consultas en la misma conexión)
    mysqli_next_result($conexion);
    
    // Retornar el total de usuarios
    return $total;
}



function obtenerTotalClientes() {
    global $conexion;
    $query = "SELECT COUNT(*) as total FROM clientes";
    $statement = mysqli_prepare($conexion, $query);
    mysqli_stmt_execute($statement);
    mysqli_stmt_bind_result($statement, $total);
    mysqli_stmt_fetch($statement);
    mysqli_stmt_close($statement);
    return $total;
}

function obtenerTotalProductos() {
    global $conexion;
    $query = "SELECT COUNT(*) as total FROM producto";
    $statement = mysqli_prepare($conexion, $query);
    mysqli_stmt_execute($statement);
    mysqli_stmt_bind_result($statement, $total);
    mysqli_stmt_fetch($statement);
    mysqli_stmt_close($statement);
    return $total;
}

function obtenerTotalVentas() {
    global $conexion;
    $query = "SELECT COUNT(*) as total FROM ventas";
    $statement = mysqli_prepare($conexion, $query);
    mysqli_stmt_execute($statement);
    mysqli_stmt_bind_result($statement, $total);
    mysqli_stmt_fetch($statement);
    mysqli_stmt_close($statement);
    return $total;
}

function obtenerVentasMensuales() {
    global $conexion;
    $query = "SELECT MONTH(fecha) as mes, COUNT(*) as total FROM ventas GROUP BY MONTH(fecha)";
    $result = mysqli_query($conexion, $query);
    $ventasMensuales = array_fill(0, 12, 0);
    
    while ($row = mysqli_fetch_assoc($result)) {
        $ventasMensuales[(int)$row['mes'] - 1] = $row['total'];
    }
    
    mysqli_free_result($result); // Liberar el conjunto de resultados
    return $ventasMensuales;
}

function obtenerTotalCostoProduccion() {
    global $conexion;
    $query = "SELECT SUM(costo_produccion) as total FROM producto";
    $statement = mysqli_prepare($conexion, $query);
    mysqli_stmt_execute($statement);
    mysqli_stmt_bind_result($statement, $total);
    mysqli_stmt_fetch($statement);
    mysqli_stmt_close($statement);
    return $total;
}
?>

