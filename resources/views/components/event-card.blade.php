@props(['image','title','address', 'date', 'modalidad', 'subtitle'])

<section class="px-3 py-3 bg-light-brown">
    <!-- Imagen principal -->
    <div class="h-96">
        <img src="{{ asset($image) }}" class="h-full w-full">
    </div>
    <div class="space-y-1 mb-3 border-b">
        <!-- Información de producto -->
            <h1 class="font-lora text-center text-xl mt-3">{{ $title }}</h1>
        <div class="flex space-x-1">
            <h1>Dirección:</h1>
            <p>{{$address}}</p>
        </div>
        <div class="flex space-x-1">
            <h1>Fecha:</h1>
            <p>{{ $date }}</p>
        </div>
        <div class="flex space-x-1">
            <h1>Modalidad:</h1>
            <p>{{$modalidad}}</p>
        </div>
        <div class="flex space-x-1">
            <h1>Descripción:</h1>
            <p class="mb-2">{{$subtitle}}</p>
        </div>
    </div>
    <div class="flex space-x-2">
        <img src="{{asset('img/products/cleaning/cleaning1.png')}}" class="h-10 rounded-full">
        <img src="{{asset('img/products/cleaning/cleaning1.png')}}" class="h-10 rounded-full">
        <img src="{{asset('img/products/cleaning/cleaning1.png')}}" class="h-10 rounded-full">
        <img src="{{asset('img/products/cleaning/cleaning1.png')}}" class="h-10 rounded-full">
    </div>
</section>
