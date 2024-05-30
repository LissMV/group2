<x-layout>
    <Form class="text-center" action="/Login" method="POST">
        @csrf
        <div>
            <div>
                <x-input name="email" type="text">Email</x-input>
            </div>
            <div>
                <x-input name="password" type="password">Password</x-input>
            </div>
            <button type="submit">Ayuda</button>
        </div>
    </Form>
</x-layout>
