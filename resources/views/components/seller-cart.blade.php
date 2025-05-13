@props(['image','name','price','subtitle'])

<div class="mx-14 my-3 border p-3 border-black">
    <img class="h-52 w-72 mx-auto" src="{{ asset($image) }}"  alt="">
    <div class="text-center font-montserrat">
        <p class="font-semibold text-azul">{{ $name }}</p>
        <p>$ {{ $price }}</p>
        <p>{{ $subtitle }}</p>
    </div>
</div>
