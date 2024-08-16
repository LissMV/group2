<x-layout>
    {{$store}}

    @foreach ($store->products as $product)
        <p class="mt-5">{{$product}}</p>
    @endforeach
    <div class="flex flex-col justify-center items-center h-screen">
        <p class="text-3xl flex justify-center h-14 text-center" syle="font-size: 10px" style="color: #79401E;">PERFIL DE TIENDA</p>
        <Form action="/Register" method="POST">
            @csrf
        <div class="flex">
            <div>
                <img height="300px" width="300px"
                    src="https://png.pngtree.com/png-vector/20191017/ourmid/pngtree-shop-icon-png-image_1820095.jpg"
                    alt="">
            </div>
            <div>
                <div class="h-14">
                    <x-input name="user" type="text" >Nombre de tienda</x-input>
                </div>
                <div class="h-14">
                    <x-input name="phone" type="tel" >Teléfono</x-input>
                </div>
                <div class="h-14">
                    <x-input name="email" type="email">Email</x-input>
                </div>
                <div class="h-14">
                    <x-input name="name" type="text" >Dirección</x-input>
                </div>
                <div class="h-14">
                    <x-input name="name" type="text">Descripción de tienda</x-input>
                </div>
                <div class="h-20">
                <button class=" border-double border-neutral-950 border rounded-xl px-4 py-1.5 bg-light-brown"
                    type="submit" >Formulario para venta de productos</button>
                </div>
            </div>
        </form>
</x-layout>
