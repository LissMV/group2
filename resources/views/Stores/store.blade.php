<x-layout>
 <Form class="text-center my-16" action="/create" method="POST">
    @csrf
    <div>
        <h1 class="font-bold text-4xl m-8">Formulario para solicitar acceso para vender</h1>
    </div>
    <div>
        <div class="h-14">
            <x-input name="name" type="text" >Nombre de tienda</x-input>
        </div>
        <div class="h-14">
            <x-input name="phone" type="tel" >Teléfono</x-input>
        </div>
        <div class="h-14">
            <x-input name="email" type="email">Email</x-input>
        </div>
        <div class="h-14">
            <x-input name="address" type="text" >Dirección</x-input>
        </div>
        <div class="h-14">
            <x-input name="description" type="text">Descripción de tienda</x-input>
        </div>
        <div class="h-14">
            <x-input name="name" type="text">Redes sociales</x-input>
        </div>

        <button class=" border-double border-neutral-950 border rounded-xl px-4 py-1.5  hover:bg-red-500"
        type="submit" >Ayudaa</button>
    </div>
 </form>
</x-layout>
