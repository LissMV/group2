<x-layout>
    <div class="grid grid-cols-3 h-screen place-content-center ">
        <div class="col-span-1">
            <img class="h-screen" src="{{ asset('img/forms/biobio.png') }}" alt="">
        </div>

        <div class="col-span-2 m-24">
            <h1 class="font-bold text-4xl m-8 text-center pb 8">Sign Up</h1>
            <form class="flex justify-center items-center" action="/register" method="POST">
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
</x-layout>
