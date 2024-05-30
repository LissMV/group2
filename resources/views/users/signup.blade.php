<x-layout>
    <Form action="/Register" method="POST">
        @csrf
        <div>
            <div>
                <x-input name="user" type="text">User name</x-input>
            </div>
            <div>
                <x-input name="email" type="text">Email</x-input>
            </div>
            <div>
                <x-input name="password" type="password">Password</x-input>
            </div>
            <button type="submit">Ayuda x2</button>
        </div>
    </Form>
</x-layout>
