<x-layout>
    <Form action="/Register" method="POST">
        @csrf
    <div>
        <x-input name="price" type="string">Disponible</x-input>
        <label for=""></label>
    </div>
    <div>
        <x-input name="email" type="text">Precio</x-input>
        <label for=""></label>
    </div>
    <div>
        <x-input name="password" type="password">Descripción</x-input>
        <label for=""></label>
    </div>
    </form>
</x-layout>

