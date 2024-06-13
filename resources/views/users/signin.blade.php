<x-layout>
    <div class="grid grid-cols-4 h-screen place-content-center ">
        <div class="col-span-2">
            <img class="h-screen" src="{{ asset('img/forms/imagen.png') }}" alt="">
            <div class="absolute top-32 text-white px-16 pt-32">
                <h1 class="text-4xl">Crea una Cuenta!</h1>
                <p class="text-2xl pt-5">Forma parte de esta comunidad</p>
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
</x-layout>
