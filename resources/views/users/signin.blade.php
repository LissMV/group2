<x-layout>

    <div style="background-image: url('https://media.istockphoto.com/id/1008739182/es/foto/tel%C3%B3n-de-fondo-de-pared-natural-de-hojas-verdes.jpg?s=1024x1024&w=is&k=20&c=SyIFXMnF_bDnsAVP6yu7tKQucBPXQFGBsFLjz9ZNm-0='); font-family: montserrat">


    <section class="flex justify-center items-center h-screen">
    <div class="flex h-screen place-content-center bg-white">
        <div class="w-100">
            <img class="h-screen w-96" src="{{ asset('https://i.pinimg.com/564x/4c/20/51/4c2051ac09ca76ec676e65cdef776a6f.jpg') }}" alt="">
            <div class="absolute top-20 px-4 pt-32 text-center w-96">
                <h1 class="text-3xl" style="color: #FEFAE0">¡CREA UNA CUENTA!</h1>
                <p class="text-2xl pt-5 mb-4" style="color: #FEFAE0">Forma parte de esta comunidad</p>
                <a class=" bg-light-green border p-1 px-6 text-white border-light-green" href="{{ route('register') }}">Registrarse</a>
            </div>
         </div>

        <div class="col-span-2 m-24">
            <h1 class="font-bold text-4xl m-8 text-center pb-8" style="color: #283618">Iniciar Sesión</h1>
            <form class="flex justify-center items-center " action="login" method="POST">
                @csrf
                <div class="w-96 p-6">
                    <div class="pb-8" style="color: #283618">
                        <x-input name="email" type="text">Email</x-input>
                    </div>
                    <div class="pb-6">
                        <x-input name="password" type="password">Password</x-input>
                    </div>

                    <x-button>Iniciar Sesión</x-button>
                </div>

            </form>
        </div>
    </div>
    </section>
    </div>
</x-layout>
