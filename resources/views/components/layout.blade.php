<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Ecommunity</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('img/branding/circuloPrincipal.png') }}" type="image/x-icon">
</head>

<body class="font-lora bg-celeste">
    @auth
        <section class="w-full">
            <x-navbar class="fixed w-full"/>
            <div>
                <x-navertical class="h-screen w-52 fixed overflow-y-auto mt-16" />
            </div>

            <div class="pt-[80px] ">
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
