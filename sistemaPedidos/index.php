<?php
$alert = '';
session_start();

// Verificar si el usuario ya tiene una sesión activa
if (!empty($_SESSION['active'])) {
    header('location: sistema/');
    exit;
}

require_once "conexion.php";
require_once "auth0_config.php";

// Verificar si el usuario ha iniciado sesión con Auth0
$userInfo = $auth0->getUser();
if ($userInfo) {
    $auth0_id = $userInfo['sub'];
    $email = $userInfo['email'];
    $name = $userInfo['name'];

    // Verificar si el usuario ya existe en la base de datos
    $query = mysqli_query($conexion, "SELECT * FROM usuario WHERE auth0_id = '$auth0_id'");
    if (mysqli_num_rows($query) > 0) {
        $dato = mysqli_fetch_array($query);
        $_SESSION['active'] = true;
        $_SESSION['idUser'] = $dato['idusuario'];
        $_SESSION['nombre'] = $dato['nombre'];
        $_SESSION['email'] = $dato['correo'];
        $_SESSION['user'] = $dato['usuario'];
        $_SESSION['rol'] = $dato['idrol'];
        $_SESSION['rol_name'] = $dato['rol'];
    } else {
        // Crear un nuevo usuario si no existe
        $insert = mysqli_query($conexion, "INSERT INTO usuario (nombre, correo, auth0_id, tipo_login) VALUES ('$name', '$email', '$auth0_id', 'auth0')");
        if ($insert) {
            $_SESSION['active'] = true;
            $_SESSION['nombre'] = $name;
            $_SESSION['email'] = $email;
        }
    }
    header('location: sistema/');
    exit;
}

// Procesar el formulario de login local
if (!empty($_POST)) {
    if (empty($_POST['usuario']) || empty($_POST['clave'])) {
        $alert = '<div class="alert alert-danger" role="alert">
                    Ingrese su usuario y su clave
                </div>';
    } else {
        $user = mysqli_real_escape_string($conexion, $_POST['usuario']);
        $clave = md5(mysqli_real_escape_string($conexion, $_POST['clave'])); // Se debe evitar MD5 en producción

        $query = mysqli_query($conexion, "SELECT u.idusuario, u.nombre, u.correo, u.usuario, r.idrol, r.rol 
                                          FROM usuario u 
                                          INNER JOIN rol r ON u.rol = r.idrol 
                                          WHERE u.usuario = '$user' AND u.clave = '$clave' AND u.tipo_login = 'local'");
        $resultado = mysqli_num_rows($query);
        if ($resultado > 0) {
            $dato = mysqli_fetch_array($query);
            $_SESSION['active'] = true;
            $_SESSION['idUser'] = $dato['idusuario'];
            $_SESSION['nombre'] = $dato['nombre'];
            $_SESSION['email'] = $dato['correo'];
            $_SESSION['user'] = $dato['usuario'];
            $_SESSION['rol'] = $dato['idrol'];
            $_SESSION['rol_name'] = $dato['rol'];
            mysqli_close($conexion);
            header('location: sistema/');
        } else {
            $alert = '<div class="alert alert-danger" role="alert">
                        Usuario o Contraseña Incorrecta
                    </div>';
            session_destroy();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vida Informático</title>
    <link href="sistema/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="sistema/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="sistema/img/logo.jpg" class="img-thumbnail">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Iniciar Sesión</h1>
                                    </div>
                                    <form class="user" method="POST">
                                        <?php echo isset($alert) ? $alert : ""; ?>
                                        <div class="form-group">
                                            <label for="">Usuario</label>
                                            <input type="text" class="form-control" placeholder="Usuario" name="usuario">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Contraseña</label>
                                            <input type="password" class="form-control" placeholder="Contraseña" name="clave">
                                        </div>
                                        <input type="submit" value="Iniciar" class="btn btn-primary">
                                        <hr>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a href="auth0_login.php" class="btn btn-secondary">Iniciar sesión con Auth0</a>
                                    </div>
                                    <div class="text-center mt-3">
                                        <a href="auth0_register.php" class="btn btn-primary">Registrarse con Auth0</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="sistema/vendor/jquery/jquery.min.js"></script>
    <script src="sistema/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="sistema/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="sistema/js/sb-admin-2.min.js"></script>

</body>

</html>
