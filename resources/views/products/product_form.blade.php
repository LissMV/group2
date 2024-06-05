<x-layout>
    <Form action="/Register" method="POST">
        @csrf
    <div>
        <x-input name="price" type="text">Disponible</x-input>
    </div>
    <div>
        <x-input name="email" type="text">Precio</x-input>
    </div>
    <div>
        <x-input name="password" type="text">Descuento</x-input>
    </div>
    <div>
        <x-input name="password" type="text">Nombre de producto</x-input>

    </div>
    <div>
        <x-input name="password" type="text">Subtitulo</x-input>
    </div>
    <div>
        <x-input name="password" type="password">Descripción</x-input>
        <label for=""></label>
    </div>
    </form>
</x-layout>

