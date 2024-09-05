<x-layout>
    <!-- Contenido principal -->
    <div class="mx-56 mt-12">
        <h1 class="text-3xl text-center m-4 font-black text-dark-green border py-3 bg-light-brown">Detalles de producto</h1>
    </div>
    <x-card store="{{ $producto->store_id }}" nombre="{{ $producto->name }}" price="{{ $producto->price }}" discount="{{ $producto->discount }}"
            subtitle="{{ $producto->subtitle }}" description="{{ $producto->description }}" image="{{ $producto->image }}" id="{{ $producto->store_id }}" />

    <div class="mx-56 mt-12">
        <h1 class="text-3xl text-center m-4 font-black text-dark-green border py-3 bg-light-brown">Reseñas</h1>
    </div>
    <div class="my-6">
        @if($producto->reviews->isEmpty())
            <p class="text-center">No hay reseñas disponibles</p>
        @else
            <div class="mx-8 ">
                @foreach($producto->reviews as $review)
                    <p class="my-4">
                        {{ $review->comment }}
                    </p>
                    <p>
                        {{ $review->user->name }}
                    </p>
                @endforeach
            </div>
        @endif
    </div>
</x-layout>
