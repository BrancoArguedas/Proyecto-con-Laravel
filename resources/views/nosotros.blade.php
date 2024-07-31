<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda nueva</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('assets.header')
    <section class="grid pt-14">
        <h1 class="text-center font-bold text-2xl py-4">Acerca de nosotros</h1>
        <div class="px-4 flex flex-col gap-4">
            <div class="">
                <h2 class="font-semibold text-xl py-4">Misión</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam et congue nulla. Nullam vitae mi elementum, tempor nibh ac, iaculis odio. Sed vel faucibus felis, in eleifend felis.</p>
            </div>
            <img 
                src="{{ asset('imagenes/mision.jpg') }}" 
                alt="Misión"
                class="">
        </div>
        <div class="px-4 flex flex-col gap-4">
            <div class="">
                <h2 class="font-semibold text-xl py-4">Visión</h2>
                <p>In elementum sem id convallis rutrum. Donec nec velit porta, auctor nisl in, fringilla risus. Cras rhoncus tellus at risus dapibus, in accumsan lectus mattis.</p>
            </div>
            <img 
                src="{{ asset('imagenes/vision.jpg') }}" 
                alt="Visión"
                class="">
        </div>
    </section>
    @vite('resources/js/header.js')
</body>
</html>