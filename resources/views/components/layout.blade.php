<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    @auth
    <section class="grid relative grid-cols-4">
        <x-navbar class="fixed w-full col-span-4"/>
        <div class="col-span-1">
        <x-navertical class="fixed h-full w-56" />
        </div>
        <div class="col-span-3 overscroll-contain">
            {{ $slot }}
        </div>
        </section>
    @endauth

    @guest
        {{ $slot }}
    @endguest
    
    <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>
