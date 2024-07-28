document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menu-toggle'); // Icono del menú 
    const menu = document.getElementById('menu'); // Lista de opciones del menú
    const userMenu = document.getElementById('user-menu'); // Icono de usuario
    const userDropdown = document.getElementById('user-dropdown'); // Lista de opciones del usuario

    // Mostrar/Ocultar el menú principal
    menuToggle.addEventListener('click', function () {
        menu.classList.toggle('hidden');
    });

    // Mostrar/Ocultar el dropdown del usuario
    userMenu.addEventListener('click', function (event) {
        // Evita que el clic en el icono de usuario cierre el dropdown
        event.stopPropagation();
        userDropdown.classList.toggle('hidden');
    });

    // Cerrar el menú principal si se hace clic fuera de él
    document.addEventListener('click', function (event) {
        if (!menuToggle.contains(event.target) && !menu.contains(event.target)) {
            menu.classList.add('hidden');
        }
    });

    // Cerrar el dropdown del usuario si se hace clic fuera de él
    document.addEventListener('click', function (event) {
        if (!userMenu.contains(event.target) && !userDropdown.contains(event.target)) {
            userDropdown.classList.add('hidden');
        }
    });
});
