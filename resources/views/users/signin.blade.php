<x-layout>
    <Form class="text-center my-16 " action="/Login" method="POST">
        @csrf
        <h1 class="font-bold text-6xl">REGISTRARSE</h1>
        <div class="font-semibold m-8 text-2xl">
            <div class=" m-8">
                <x-input name="email" type="text">Email</x-input>
            </div>
            <div>
                <x-input name="password" type="password">Password</x-input>
            </div>
            <button class=" m-8 border-double border-neutral-950 border rounded-xl px-4 py-1.5  hover:bg-indigo-500 "
                type="submit">Ayuda</button>
        </div>
    </Form>

</x-layout>
