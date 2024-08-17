@props(['name', 'price', 'img'])

<div class="mx-8 my-3">
    <img class="h-52 w-72" src="{{ asset($img) }}"  alt="">
    <div class="text-center">
        <p class="font-bold">{{ $name }}</p>
        <p>{{ $price }}</p>
    </div>
</div>
