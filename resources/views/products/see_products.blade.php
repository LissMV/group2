<x-layout>
    <!-- Contenido principal -->
    @foreach ($products as $product)
        <x-card id="{{ $product->store_id }}" nombre="{{ $product->name }}" price="{{ $product->price }}" subtitle="{{ $product->subtitle }}" description="{{ $product->description }}" image="{{ $product->image }}" />
    @endforeach

    <div class="px-8 flex">
        <h1 class="text-xl font-lora">Ver reseñas de los productos</h1>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
        </svg>
    </div>

    <!-- Sección: Más productos-->
    <div class="px-8 py-3">
        <h2 class="text-2xl font-lora mb-4">Más productos</h2>
        <div class="flex items-center space-x-4">
            <!-- Imágenes de más productos -->
            <div>
                <img src="https://ecocash.es/9655-large_default/bastoncillos-de-algodon-de-bambu-caja-200uds.jpg"
                    alt="Producto 1" class="w-32 h-auto rounded-lg shadow-md">
            </div>
            <div>
                <img src="https://m.media-amazon.com/images/I/81BvvybEzuL.__AC_SX300_SY300_QL70_ML2_.jpg"
                    alt="Producto 2" class="w-32 h-auto rounded-lg shadow-md">
            </div>
            <div>
                <img src="https://i.pinimg.com/564x/a2/80/88/a28088598903a6d3786a29af03d08da9.jpg" alt="Producto 3"
                    class="w-32 h-auto rounded-lg shadow-md">
            </div>
        </div>
    </div>
</x-layout>
