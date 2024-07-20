<x-layout>
    <div>
        <h1 class="font-bold text-4xl m-8 text-center">Formulario de Solicitud de Acceso para Vender</h1>
    </div>
 <Form class=" flex justify-center items-center" action="/create" method="POST">
    @csrf
    <div class="w-96 p-6">
        <div>
            <x-input name="name" type="text" >Nombre de tienda</x-input>
        </div>
        <div>
            <x-input name="phone" type="tel" >Teléfono</x-input>
        </div>
        <div>
            <x-input name="email" type="email">Email</x-input>
        </div>
        <div>
            <x-input name="address" type="text" >Dirección</x-input>
        </div>
        <div>
            <x-input name="description" type="text">Descripción de tienda</x-input>
        </div>
        <div>
            <x-input name="name" type="text">Redes sociales</x-input>
        </div>

        <button class=" border-double border-neutral-950 border rounded-xl px-4 py-1.5  hover:bg-red-500"
        type="submit" >Subir</button>
    </div>
 </form>
</x-layout>
