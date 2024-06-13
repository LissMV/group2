<x-layout>
    <body>
        <style>
            body {
                background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQU5tvtfh3HfGiq_ir5eCZnWyvPdO_z8w2VCA&s');
                background-size: cover;
                background-attachment: fixed;
                background-position: center
            }
        </style>
    </body>



    <section class=" m-28">
    <div class="grid grid-cols-3 h-screen place-content-center backdrop-blur-ms bg-white/15 ">
        <div class="col-span-1 static">
            <img class="h-screen static" src="{{ asset('img/forms/bioo.png') }}" alt="">

            <div class="absolute top-32 text-white px-16 pt-32">
                <h1 class="text-4xl">Crea una Cuenta!</h1>
                <p class="text-2xl pt-5">Forma parte de esta comunidad</p>
            </div>
        </div>

        <div class="col-span-2 m-24 b">
            <h1 class="font-bold text-4xl m-8 text-center pb 8">Sign Up</h1>
            <form class=" flex justify-center items-center" action="/register" method="POST">
                @csrf

                <div class="w-96 p-6">
                    <div pb-8>
                        <x-input name="name" type="text">Name</x-input>
                    </div pb-8>
                    <div>
                        <x-input name="email" type="text">Email</x-input>
                    </div>
                    <div pb-8>
                        <x-input name="password" type="password">Password</x-input>
                    </div pb-8>
                    <x-button>Register</x-button>
                </div>
            </form>
        </div>
    </div>
    </section>
</x-layout>
