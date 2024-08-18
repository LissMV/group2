@props(['store','name','price', 'subtitle','description'])

<section class="grid grid-cols-3 px-8 py-3">
    <!-- Imagen principal -->
    <div class="col-span-2 ml-12">
        <!-- Información de producto -->
        <div class="text-justify font-montserrat space-y-1">
            <h1 class="font-lora text-4xl">{{ $nombre }}</h1>
            <p>{{$subtitle}}</p>
            <p class="text-xl">{{ $price }}</p
            <p>{{$description}}</p>
        </div>
</section>
