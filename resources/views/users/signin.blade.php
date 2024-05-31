<x-layout>
    <Form class="text-center m-8" action="/Login" method="POST">
        @csrf
        <h1 class="font-bold text-6xl">PERFIL</h1>
        <div class="font-semibold m-8 text-2xl">
            <div>
                <x-input class="bg-slate-500 " name="email" type="text">Email</x-input>
            </div>
            <div>
                <x-input name="password" type="password">Password</x-input>
            </div>
            <button class="m-8" type="submit">Ayuda</button>
        </div>
    </Form>
</x-layout>
