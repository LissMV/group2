<x-layout>
    <!-- Contenido principal -->
    <div class="mx-56 mt-12">
        <h1 class="text-3xl text-center m-4 font-black text-dark-green border py-3 bg-light-brown">Detalles de producto</h1>
    </div>
    <x-card store="{{ $producto->store_id }}" nombre="{{ $producto->name }}" price="{{ $producto->price }}" discount="{{ $producto->discount }}"
            subtitle="{{ $producto->subtitle }}" description="{{ $producto->description }}" image="{{ $producto->image }}" id="{{ $producto->store_id }}" />


    <div class="ml-1" x-data="{ open: false }">
        <div class="flex">
        <button class="ml-8 text-2xl font-black" @click="open = !open">Reseñas</button>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mt-1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
        </svg>
        </div>

        <div x-show="open">
            <div class="my-6">
                @if($producto->reviews->isEmpty())
                    <p class="text-center">No hay reseñas disponibles</p>
                @else
                    <div class="mx-8 border-gray-400 border-b-2">
                        @foreach($producto->reviews as $review)
                        <div class="flex space-x-2">
                            <img class="h-10 rounded-full w-10"
                            src="{{ asset($review->user->image) }}">
                            <p class="mt-2">
                                {{ $review->user->name }}
                            </p>
                        </div>
                            <p class="my-4">
                                {{ $review->comment }}
                            </p>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>

</x-layout>
