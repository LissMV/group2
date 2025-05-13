<x-layout>
    <!-- Contenido principal -->
    <div class="mx-56">
        <h1 class="text-3xl text-center m-4 font-black text-verde border py-3 bg-verde_menta">{{ $category->name }}</h1>
    </div>
    @foreach ($category->products as $product)
        <x-card store="{{ $product->store_id }}" nombre="{{ $product->name }}" price="{{ $product->price }}" subtitle="{{ $product->subtitle }}"
                description="{{ $product->description }}" image="{{ $product->image }}" id="{{ $product->id }}" discount="{{ $product->discount }}"/>
    @endforeach
</x-layout>
