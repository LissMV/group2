@props(['name', 'price', 'img'])

<div class="mx-8 my-3">
    <img height="100px" width="350px" src="{{ asset($img) }}"  alt="">
    <div class="text-center">
        <p class="font-bold">{{ $name }}</p>
        <p>{{ $price }}</p>
    </div>
</div>
