<x-layout>
    <Form action="/Register" method="POST">
        @csrf
    <div>
        <x-input name="user" type="text">Username</x-input>
        <label for="Descripción de tienda"></label>
    </div>
    <div>
        <x-input name="email" type="text">Email</x-input>
        <label for=""></label>
    </div>
    <div>
        <x-input name="password" type="text">Password</x-input>
        <label for="Password"></label>
    </div>
    </form>
</x-layout>

