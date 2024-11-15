<header class="bg-blue-900 p-5 flex justify-between items-center shadow-md">
    <div class="logo flex items-center">
        <a href="../pages/home.php"><img src="../sistemaPedidos/sistema/img/logo.jpg" alt="Distribuidora de Agua" class="h-12 mr-2"></a>
        <h1 class="text-white text-xl font-semibold">Distribuidora de Agua</h1>
    </div>
    <nav id="navLinks" class="hidden md:flex">
        <ul class="flex space-x-4">
            <li><a href="../pages/home.php" class="text-white font-bold hover:text-gray-200">Inicio</a></li>
            <li><a href="../pages/catalogo.php" class="text-white font-bold hover:text-gray-200">Catálogo</a></li>
            <li><a href="../sistemaPedidos/index.php" class="text-white font-bold hover:text-gray-200">Pedidos</a></li>
            <li><a href="../pages/informacion.php" class="text-white font-bold hover:text-gray-200">Información</a></li>
            <li><a href="../pages/contacto.php" class="text-white font-bold hover:text-gray-200">Contacto</a></li>
        </ul>
    </nav>
    <div class="md:hidden flex flex-col cursor-pointer" onclick="toggleMenu()">
        <span class="w-6 h-0.5 bg-white mb-1"></span>
        <span class="w-6 h-0.5 bg-white mb-1"></span>
        <span class="w-6 h-0.5 bg-white"></span>
    </div>
</header>

<!-- JavaScript para el menú móvil -->
<script>
function toggleMenu() {
    var navLinks = document.getElementById("navLinks");
    navLinks.classList.toggle("hidden");
    navLinks.classList.toggle("flex");
}
</script>
