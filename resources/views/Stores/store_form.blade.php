<x-layout>
    <div class="flex flex-col justify-center items-center h-screen">
    <h1 class="text-3xl flex justify-center h-14 text-center  ">PERFIL DE TIENDA</h1>
    <Form action="/Register" method="POST">
        @csrf
    <div>
        <x-input name="user" type="text">Nombre de tienda</x-input>
    </div>
    <div>
        <x-input name="phone" type="tel">Teléfono</x-input>
    </div>
    <div>
        <x-input name="email" type="email">Email</x-input>
    </div>
    <div>
        <x-input name="name" type="text">Dirección</x-input>
    </div>
    <div>
        <x-input name="name" type="text">Descripción de tienda</x-input>
    </div>
    <button class=" border-double border-neutral-950 border rounded-xl px-4 py-1.5  hover:bg-sky-500"
                    type="submit">Llenar formulario para venta de productos</button>
    </form>
</x-layout>

