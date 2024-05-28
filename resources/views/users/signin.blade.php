<x-layout>
    <Form action="/Login" method="POST">
        @csrf
        <div>
            <div>
                <x-input name="email" type="text">Email</x-input>
            </div>
            <div>
                <x-input name="password" type="text">Password</x-input>
            </div>
        </div>
    </Form>
</x-layout>
