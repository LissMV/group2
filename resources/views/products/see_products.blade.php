<x-layout>
    <!-- Contenido principal -->
    <section class="grid grid-cols-2 px-8 py-8">
        <!-- Imagen principal -->
        <div class="w-full col-span-1">
            <img src="{{ asset('img/products/cleaning/skin care/skinCare1.png') }}" class="w-full rounded-lg shadow-md">
        </div>
        <div class=" col-span-1 ml-12">
            <!-- Información de producto -->
            <div class="text-justify font-montserrat space-y-1">
                <h1 class="font-lora text-4xl">Cepillo Capilar</h1>
                <p>Con contenedor de vidrio</p>
                <p class="text-xl">$9.00</p>
                <p>No tiene descuento</p>
                <p>Para todo tipo de piel, hecho con aceites naturales del coco y como ingrediente especial tenemos el
                    arroz.</p>
            </div>
            <div class="space-x-3 py-4">
                <a class=" bg-light-green border p-1 px-6 text-white border-light-green"
                    href="{{ route('shoppingCart') }}">
                    Agregar a carrito
                </a>
                <a class=" bg-light-green border p-1 px-6 text-white border-light-green"
                    href="{{ route('sellerHome') }}">
                    Ir a Tienda
                </a>
            </div>
        </div>
    </section>
    
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
