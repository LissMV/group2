<x-layout>
    <Form action="/Register" method="POST">
        @csrf
    <div>
        <x-input name="user" type="text">Username</x-input>
    </div>
    <div>
        <x-input name="email" type="text">Email</x-input>
    </div>
    <div>
        <x-input name="password" type="text">Password</x-input>
    </div>
    </form>
</x-layout>
