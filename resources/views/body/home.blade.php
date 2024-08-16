<x-layout>
    <div class="w-full flex flex-col justify-center py-4">
        <div class="flex justify-center">
            <img width="w-full" src="{{ asset('img/Home 1.png') }}" alt="">
        </div>

        <div class="flex justify-center">
            <a href="{{ route('learning') }}"
                class="font-serif text-2xl m-8 border-double border-neutral-950 border rounded-xl px-4 py-1.5  hover:bg-light-brown "
                type="submit">Comunidad</a>

            <a href="{{ route('learning') }}"
                class="font-serif text-2xl m-8 border-double border-neutral-950 border rounded-xl px-4 py-1.5  hover:bg-light-brown    "
                type="submit">Aprende más</a>
        </div>

        <div class="grid grid-cols-3 mx-6">
            @foreach ($products as $product)
                <x-mini-card name="{{$product->name}}" price="{{$product->price}}" img="{{$product->image}}"/>
            @endforeach
        </div>

        <div class="grid grid-cols-4 m-2">
            <h1 class="col-span-4 mb-4">Inicia sesión para ver otros productos como...</h1>

            <div>
                <img height="200px" width="400px" src="{{ asset('img/Home 8.png') }}" alt="">
            </div>

            <div>
                <img height="200px" width="400px" src="{{ asset('img/Home 9.png') }}" alt="">
            </div>

            <div>
                <img height="200px" width="400px" src="{{ asset('img/Home 10.png') }}"
                    alt="">
            </div>

            <div>
                <img height="200px" width="400px" src="{{ asset('img/Home 11.png') }}"
                    alt="">
            </div>
        </div>
    </div>

</x-layout>
