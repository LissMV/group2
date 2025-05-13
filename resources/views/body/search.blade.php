<x-layout>
    <div class="mx-56 my-10">
        <h1 class="text-3xl text-center m-4 font-black text-verde_menta border py-3 bg-verde">Resultados para esta búsqueda</h1>
    </div>

    @if($storesSearch->count() != 0)
        <h1 class="text-center my-8 font-semibold">Tiendas encontradas</h1>
        <div class="mr-12 ml-12 grid grid-cols-4 gap-4">
            @foreach($storesSearch as $store)
                <a href="{{ route('sellerHome', $store->id) }}">
                    <section class="flex space-x-4">
                        <img src="{{asset($store->image)}}" class="rounded-full profile-widget-picture h-36 w-36">
                        <h1 class="mt-12">{{ $store->name }}</h1>
                    </section>
                </a>
            @endforeach
        </div>
    @else
        <h1 class="text-center my-8 font-semibold">No se encontraron tiendas</h1>
    @endif

    @if($productsSearch->count() != 0)
        <h1 class="text-center my-8 font-semibold">Productos encontrados</h1>
        <div class="mr-12 ml-12 grid grid-cols-4 gap-4">
            @foreach($productsSearch as $product)
                <a href="{{ route('seeDetails', $product->id) }}">
                    <section class="mt-6">
                        <img src="{{asset($product->image)}}" class="mx-auto profile-widget-picture h-36 w-36">
                        <h1 class="text-center">{{ $product->name }}</h1>
                    </section>
                </a>
            @endforeach
        </div>
    @else
        <h1 class="text-center my-8 font-semibold">No se encontraron productos</h1>
    @endif
</x-layout>
