<header style="
    background-color: #004080;
    padding: 20px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
">
    <div class="logo" style="display: flex; align-items: center;">
        <a href="../pages/home.php"><img src="../assets/images/logo.png" alt="Distribuidora de Agua" style="height: 50px; margin-right: 10px;"></a>
        <h1 style="color: #ffffff; font-size: 1.5rem;">Distribuidora de Agua</h1>
    </div>
    <nav class="nav-links" style="display: flex;">
        <ul style="display: flex; list-style-type: none; margin: 0; padding: 0;">
            <li style="margin: 0 10px;"><a href="../pages/home.php" style="color: #ffffff; text-decoration: none; font-weight: bold; position: relative;">Inicio</a></li>
            <li style="margin: 0 10px;"><a href="../pages/login.php" style="color: #ffffff; text-decoration: none; font-weight: bold; position: relative;">Login / Registro</a></li>
            <li style="margin: 0 10px;"><a href="../pages/catalogo.php" style="color: #ffffff; text-decoration: none; font-weight: bold; position: relative;">Catálogo</a></li>
            <li style="margin: 0 10px;"><a href="../pages/pedidos/hacer_pedido.php" style="color: #ffffff; text-decoration: none; font-weight: bold; position: relative;">Pedidos</a></li>
            <li style="margin: 0 10px;"><a href="../pages/informacion.php" style="color: #ffffff; text-decoration: none; font-weight: bold; position: relative;">Información</a></li>
            <li style="margin: 0 10px;"><a href="../pages/contacto.php" style="color: #ffffff; text-decoration: none; font-weight: bold; position: relative;">Contacto</a></li>
        </ul>
    </nav>
    <div class="menu-toggle" onclick="toggleMenu()" style="
        display: none;
        flex-direction: column;
        cursor: pointer;
        margin-left: 20px;
    ">
        <span style="width: 25px; height: 3px; background-color: #ffffff; margin: 4px 0;"></span>
        <span style="width: 25px; height: 3px; background-color: #ffffff; margin: 4px 0;"></span>
        <span style="width: 25px; height: 3px; background-color: #ffffff; margin: 4px 0;"></span>
    </div>
</header>
