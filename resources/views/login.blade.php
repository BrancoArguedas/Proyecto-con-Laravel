<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda nueva</title>
    @vite('resources/css/app.css')
</head>
<body class=" text-primary">
    @include('assets.header')
    <section class="pt-14 h-screen flex flex-col items-center">
        <h2 class="py-16 text-xl font-semibold w-full text-center">Iniciar sesión</h2>
        <form class="grid place-content-center py-8 w-full" action="" method="post">
            <div class="relative mb-8">
                <input 
                    class="peer px-4 py-2 w-full border-2 border-primary bg-transparent placeholder-transparent focus:outline-none focus:border-secondary"
                    type="email" name="email" id="email" placeholder="Ingrese su correo electrónico" required>
                <label 
                    for="email" 
                    class="absolute left-3 -top-3.5 text-gray-500 bg-background px-2 transition-all peer-placeholder-shown:top-2 peer-placeholder-shown:left-4 peer-placeholder-shown:text-gray-500 peer-placeholder-shown:text-base peer-placeholder-shown:font-normal peer-focus:-top-3.5 peer-focus:left-3 peer-focus:text-primary peer-focus:text-sm peer-focus:font-medium"
                >
                    Ingrese su correo electrónico
                </label>
            </div>
            <div class="relative mb-8">
                <input 
                    class="peer px-4 py-2 w-full border-2 border-primary bg-transparent placeholder-transparent focus:outline-none focus:border-secondary"
                    type="password" name="password" id="password" placeholder="Ingrese su contraseña" required>
                <label 
                    for="password" 
                    class="absolute left-3 -top-3.5 text-gray-500 bg-background px-2 transition-all peer-placeholder-shown:top-2 peer-placeholder-shown:left-4 peer-placeholder-shown:text-gray-500 peer-placeholder-shown:text-base peer-placeholder-shown:font-normal peer-focus:-top-3.5 peer-focus:left-3 peer-focus:text-primary peer-focus:text-sm peer-focus:font-medium"
                >
                    Ingrese su contraseña
                </label>
            </div>
            <div class="mb-8">
                <input class="border-2 border-primary" type="checkbox" name="aceptoTerminos" id="aceptoTerminos">
                <label for="aceptoTerminos" class="pl-2">Acepto los <a href="#" class="text-primary underline">Términos y condiciones</a></label>
            </div>
            <div class="mb-8">
                <input class="border-2 border-primary" type="checkbox" name="aceptoPublicidad" id="aceptoPublicidad">
                <label for="aceptoPublicidad" class="pl-2">Acepto recibir <a href="#" class="text-primary underline">Publicidad</a> (Opcional) </label>
            </div>
            <input type="submit" class="mt-8 border-2 border-primary text-background bg-primary text-xl font-normal py-2 rounded-sm" value="Iniciar sesión">
        </form>
        <div class="flex gap-4">
            <span>¿No tiene una cuenta?</span>
            <a href="{{ route('registro') }}" class="text-primary underline">Regístrese</a>
        </div>
    </section>
    @vite('resources/js/header.js')
</body>
</html>
