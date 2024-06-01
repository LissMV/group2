<x-layout>
    <Form action="/Register" method="POST">
        @csrf
    <div>
        <x-input name="user" type="text">Nombre de tienda</x-input>
        <label for="Descripción de tienda"></label>
    </div>
    <div>
        <x-input name="password" type="text">Número de teléfono</x-input>
        <label for=""></label>
    </div>
    <div>
        <x-input name="password" type="password">Email</x-input>
        <label for="Password"></label>
    </div>
    <div>
        <x-input name="password" type="password">Dirección</x-input>
        <label for="Password"></label>
    </div>
    <div>
        <x-input name="password" type="password">Descripción</x-input>
        <label for="Password"></label>
    </div>
    </form>
</x-layout>

