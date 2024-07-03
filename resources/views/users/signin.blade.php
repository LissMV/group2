<x-layout>
    <body>
        <style>
            body {
            background-image: url('https://media.istockphoto.com/id/1008739182/es/foto/tel%C3%B3n-de-fondo-de-pared-natural-de-hojas-verdes.jpg?s=1024x1024&w=is&k=20&c=SyIFXMnF_bDnsAVP6yu7tKQucBPXQFGBsFLjz9ZNm-0=');

             }
        </style>
    </body>

    <section class="flex justify-center items-center h-screen">
    <div class="flex h-screen place-content-center bg-white ">
        <div class="w-96">
            <img class="h-screen" src="{{ asset('https://i.pinimg.com/564x/6c/40/c5/6c40c53bfebdffec1e7361846fefa46b.jpg') }}" alt="">
            <div class="absolute top-32 px-4 pt-32 text-center">
                <h1 class="text-4xl">Crea una Cuenta!</h1>
                <p class="text-2xl pt-5 mb-4">Forma parte de esta comunidad</p>
                <a class=" bg-light-green border p-1 px-6 text-white border-light-green" href="{{ route('register') }}">Crear cuenta</a>
            </div>
         </div>

        <div class="col-span-2 m-24">
            <h1 class="font-bold text-4xl m-8 text-center pb-8">Log in</h1>
            <form class="flex justify-center items-center " action="/login" method="POST">
                @csrf
                <div class="w-96 p-6">
                    <div class="pb-8">
                        <x-input name="email" type="text">Email</x-input>
                    </div>
                    <div class="pb-6">
                        <x-input name="password" type="password">Password</x-input>
                    </div>

                    <x-button>Log in</x-button>
                </div>

            </form>
        </div>
    </div>
    </section>
</x-layout>
