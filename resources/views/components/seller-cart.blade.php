@props(['image','name','price','subtitle'])

<div class="mx-8 my-3 border p-3 border-black">
    <img class="h-52 w-72" src="{{ asset($image) }}"  alt="">
    <div class="text-center font-montserrat">
        <p class="font-semibold">{{ $name }}</p>
        <p>$ {{ $price }}</p>
        <p>{{ $subtitle }}</p>
    </div>
</div>
