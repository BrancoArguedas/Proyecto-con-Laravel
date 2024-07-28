<header class="flex bg-background h-14 items-center px-6 justify-between relative">
    <div class="flex items-center gap-2 z-10">
        <img 
            src="{{ asset('imagenes/logo.png') }}" 
            alt="Logo de la empresa"
            class="w-12">
        <h2>SuperMarket</h2>
    </div>
    <div id="menu-toggle" class="grid gap-y-1 cursor-pointer md:hidden">
        <span class="bg-primary w-4 h-[2px] rounded-xl"></span>
        <span class="bg-primary w-4 h-[2px] rounded-xl"></span>
        <span class="bg-primary w-4 h-[2px] rounded-xl"></span>
    </div>
    <ul id="menu" class="hidden absolute top-12 left-0 bg-background w-full text-center py-2 md:flex md:static md:right-0 md:left-auto md:justify-around">
        <li class="py-2">
            <a href="{{ route('inicio') }}">Inicio</a>
        </li>
        <li class="py-2">
            <a href="{{ route('nosotros') }}">Nosotros</a>
        </li>
        <li class="py-2">
            <a href="{{ route('contactanos') }}">Contáctanos</a>
        </li>
        <li class="py-2 relative flex items-center justify-center" id="user-menu">
            <i class="text-black fa-solid fa-user cursor-pointer"></i>
            <ul id="user-dropdown" class="hidden absolute top-10 bg-white border border-gray-200 shadow-lg md:top-12">
                <li><a href="{{ route('login') }}" class="block py-2 w-32">Iniciar sesión</a></li>
                <li><a href="{{ route('registro') }}" class="block py-2 w-32">Registrarse</a></li>
            </ul>
        </li>
    </ul>

</header>