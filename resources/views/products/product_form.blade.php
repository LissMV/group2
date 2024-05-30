<x-layout>
    <Form action="/Register" method="POST">
        @csrf
    <div>
        <x-input name="user" type="text">Username</x-input>
        <label for=""></label>
    </div>
    <div>
        <x-input name="email" type="text">Email</x-input>
        <label for=""></label>
    </div>
    <div>
        <x-input name="password" type="password">Password</x-input>
        <label for=""></label>
    </div>
    </form>
</x-layout>

