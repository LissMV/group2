<x-layout >
    <body>
        <style class="bg-no-repeat bg-cover h-full w-full bg-left ">
            body {
            background-image: url('https://media.istockphoto.com/id/1092725460/es/foto/exuberante-follaje.jpg?s=1024x1024&w=is&k=20&c=BFZHKZApykVig_IEPBy6SBzZP1wU-agncoVuI5uiqV0=');
             }
        </style>
    </body>

    <section class="flex justify-center items-center h-screen">
    <div class="flex h-screen place-content-center bg-white ">
        <div>
            <img class="h-screen static w-96" src="{{ asset('https://i.pinimg.com/564x/6a/70/da/6a70dabed57eba187fe3ae10fbd437c8.jpg') }}" alt="">

            <div class="absolute top-32 text-white px-4 pt-32 text-center">
                <h1 class="text-4xl">¡Crea una Cuenta!</h1>
                <p class="text-2xl pt-5 mb-4">Forma parte de esta comunidad</p>
                <a class=" bg-light-green border p-1 px-6 text-white border-light-green" href="{{ route('login') }}">¿Tienes una cuenta?</a>
            </div>
        </div>

        <div class="col-span-2 m-24 ">
            <h1 class="font-bold text-4xl m-8 text-center pb 8 text-amber-950">Sign Up</h1>
            <form class=" flex justify-center items-center" action="/register" method="POST">
                @csrf

                <div class="w-96 p-6">

                    <x-input name="name" type="text">Name</x-input>

                    <x-input name="email" type="text">Email</x-input>

                    <x-input name="password" type="password">Password</x-input>

                    <x-button>Register</x-button>
                </div>
            </form>
        </div>
    </div>
    </section>
</x-layout>
