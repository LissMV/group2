<x-layout>
    <div class="w-full flex flex-col justify-center pt-6 pb-4">
        <div class="flex justify-center">
            <img width="w-full" src="{{ asset('img/Home 1.png') }}" alt="">
        </div>

        <div class="flex justify-center">
            <a href="{{ route('community') }}"
                class="font-serif text-2xl m-8 border-double border-neutral-950 border rounded-xl px-4 py-1.5 hover:bg-light-brown hover:text-white"
                type="submit">Comunidad</a>

            <a href="{{ route('learning') }}"
                class="font-serif text-2xl m-8 border-double border-neutral-950 border rounded-xl px-4 py-1.5 hover:bg-light-brown hover:text-white"
                type="submit">Aprende más</a>
        </div>

        <div class="grid grid-cols-3 mx-6">
            @foreach ($products as $product)
                <a href="{{ route('seeDetails', $product->id) }}">
                    <x-mini-card name="{{$product->name}}" price="{{$product->price}}" img="{{$product->image}}"/>
                </a>
            @endforeach
        </div>
    </div>
</x-layout>
