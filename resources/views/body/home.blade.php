<x-layout>
    <div class="w-full flex flex-col justify-center pt-6 pb-4">
        <div class="flex my-3 mt-4 border p-2 border-verde mx-56 bg-verde_azul">
            <div class="ml-4 my-2">
                <img width="w-full" src="{{ asset('img/storeProfile/store7.png') }}" alt="">
            </div>
            <div>
                <p class="text-center text-2xl mt-5 ml-10 text-white font-black">¡Con muchos más despuentos disponibles!</p>
                <p class="ml-10 mt-5 text-white text-">productos con 20% hasta un 30% de descuento solo en:</p>
                <p class="ml-10 mb-24 text-white text-2xl">BioNature</p>
                <a class="ml-72 text-white hover:text-verde_menta"
                 href="http://127.0.0.1:8000/sellerHome/7">click para visitar la tienda</a>
            </div>

        </div>

        <div class="flex justify-center">
            <a href="{{ route('community') }}"
                class="font-serif text-2xl m-8 border-azul border rounded-xl px-4 py-1.5 hover:bg-verde_azul hover:text-white bg-verde_menta"
                type="submit">Comunidad</a>

            <a href="{{ route('learning') }}"
                class="font-serif text-2xl m-8 border-azul border rounded-xl px-4 py-1.5 hover:bg-verde_azul hover:text-white bg-verde_menta"
                type="submit">Aprende más</a>
        </div>

        <div class="grid grid-cols-3 mx-6">
            @foreach ($products as $product)
                <a href="{{ route('seeDetails', $product->id) }}">
                    <x-mini-card name="{{ $product->name }}" price="{{ $product->price }}"
                        img="{{ $product->image }}" />
                </a>
            @endforeach
        </div>
    </div>
</x-layout>
