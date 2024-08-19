@props(['image','title','address', 'date', 'modalidad', 'subtitle'])

<section class="px-8 py-3">
    <!-- Imagen principal -->
    <div class="w-full">
        <img src="{{ asset($image) }}" class="w-full h-72 rounded-lg shadow-md">
    </div>
    <div class="col-span-2 ml-12">
        <!-- Información de producto -->
        <div class="text-justify font-montserrat space-y-1">
            <h1 class="font-lora text-4xl">{{ $title }}</h1>
            <p>{{$adress}}</p>
            <p class="text-xl">{{ $date }}</p>
            <p>{{$modalidad}}</p>
            <p>{{$subtitle}}</p>
        </div>

    </div>
</section>
