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
    <section class="pt-14 grid">
        <h2 class="font-bold text-2xl text-center py-4">Super Market</h2>
        <div class="grid grid-cols-2 w-full px-8 gap-8">
            <div class="flex justify-between items-center px-4 rounded-[0.5rem] border-solid border-2 border-black">
                <p>Filtrar</p>
                <i class="fa-light fa-sliders"></i>
            </div>
            <div class="flex justify-between items-center px-4 rounded-[0.5rem] border-solid border-2 border-black">
                <p>Carrito</p>
                <i class="fa-sharp fa-regular fa-cart-shopping"></i>
            </div>
        </div>
    </section>
    
    @vite('resources/js/header.js')
</body>
</html>