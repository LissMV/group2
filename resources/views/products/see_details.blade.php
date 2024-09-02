<x-layout>
    <!-- Contenido principal -->
    <div class="mx-56">
        <h1 class="text-3xl text-center m-4 font-black text-dark-green border py-3 bg-light-brown">Detalles de producto</h1>
    </div>
    <x-card store="{{ $producto->store_id }}" nombre="{{ $producto->name }}" price="{{ $producto->price }}" subtitle="{{ $producto->subtitle }}" description="{{ $producto->description }}" image="{{ $producto->image }}" id="{{ $producto->store_id }}" />
  
</x-layout>
