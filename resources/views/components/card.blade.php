@props(['id','store','nombre','price', 'subtitle', 'description', 'image',])

<section class="grid grid-cols-3 px-8 py-3">
    <!-- Imagen principal -->
    <div class="w-full col-span-1">
        <img src="{{ asset($image) }}" class="w-full h-72 rounded-lg shadow-md">
    </div>
    <div class="col-span-2 ml-12">
        <!-- Información de producto -->
        <div class="text-justify font-montserrat space-y-1">
            <h1 class="font-lora text-4xl">{{ $nombre }}</h1>
            <p>{{$subtitle}}</p>
            <p class="text-xl">{{ $price }}</p>
            <p>No tiene descuento</p>
            <p>{{$description}}</p>
        </div>

        <div class="space-x-3 py-4">
            <form action="{{ route('shoppingCartAdd', $id) }}" method="POST" class="inline-block">
                @csrf
                <div class="mb-2">
                    <label>Cantidad:</label>
                    <input class="w-8" type="number" min="1" value="1" name="quantity">
                </div>

                <button class=" bg-light-green border p-1 px-6 text-white border-light-green" type="submit">
                    Agregar a carrito
                </button>
            </form>
            <a class="bg-light-green border p-1 px-6 text-white border-light-green"
               href="{{ route('sellerHome', $id) }}">
                Ir a Tienda
            </a>
        </div>
    </div>


</section>
