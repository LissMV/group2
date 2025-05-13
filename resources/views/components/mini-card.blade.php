@props(['name', 'price', 'img'])

<div class=" my-3 mt-4 border p-2 border-verde_azul w-72 mx-auto hover:bg-verde_menta">
    <img class="h-52 w-72" src="{{ asset($img) }}"  alt="">
    <div class="text-center font-montserrat">
        <p class="font-semibold text-verde_azul hover:text-azul">{{ $name }}</p>
        <p class="text-verde_azul hover:text-azul">$ {{ $price }}</p>
    </div>
</div>
