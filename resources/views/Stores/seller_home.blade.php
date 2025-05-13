<x-layout>

<section class="grid grid-cols-3 bg-verde_menta pb-7 pt-2">
    <div class="cols-span-1 ml-4 mt-4">
        <img src="{{ asset($store->image) }}" class="rounded-full profile-widget-picture h-56 w-56 ml-16">
    </div>

    <div class=" items-center justify-center mr-4">
        <h1 class="font-black text-3xl mt-10 text-verde">{{$store->name}}</h1>
        <p class="mt-3 font-black text-verde">Descripción:</p>
        <h1 class="">{{ $store->description }}</h1>
    </div>

    <div class="mt-5">
        <div>
            <p class="font-black text-verde">Número de telefono:</p>
            <h1>{{ $store->phone }}</h1>
        </div>
        <div>
            <p class="font-black text-verde">Email:</p>
            <h1>{{ $store->email }}</h1>
        </div>
        <div>
            <p class="font-black text-verde">Dirección:</p>
            <h1>{{ $store->address }}</h1>
        </div>
        <div>
            <p class="font-black text-verde">Redes Sociales:</p>
            <h1>{{ $store->social_media }}</h1>
        </div>
    </div>
</section>

<div class="grid grid-cols-3 mx-6 mt-5">
    @foreach ($store->products as $product)
    <a href="{{ route('seeDetails', $product->id)}}">
        <x-seller-cart name="{{$product->name}}" price="{{$product->price}}" image="{{$product->image}}" subtitle="{{$product->subtitle}}"/>
    </a>
    @endforeach
</div>

</x-layout>
