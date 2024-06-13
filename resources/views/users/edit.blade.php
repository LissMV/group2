<x-layout>
    <section class="flex justify-center m-9">
    <div>
        <img class="h-72 w-72" src="{{ asset('img/forms/perfil.png') }}">
    </div>
    <div>
    <h1 class="font-bold text-6xl text-center m-8">Editar perfil</h1>
    <form class="flex justify-center items-center m-8" action="/users/update/{{$user->id}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="w-96 p-6">
            <div>
                <x-input name="name" type="text" value="{{$user->name}}">Name</x-input>
            </div>
            <div>
                <x-input name="email" type="text" value="{{$user->email}}" >Email</x-input>
            </div>

            <x-button>Actualizar</x-button>
        </div>
    </form>
    </div>
    </section>

    @if($user->is_seller)
    <section class="text-center">
        <h1 class="font-black">Esperando por la verificación</h1>
        <div>
            Por favor espera hasta que nosotros verifiquemos tu perfil y asi darte acceso para que puedas unirte como vendedor
            ¡Gracias por confiar en nosotros!
        </div>
    </section>

    @endif

    <form class="flex justify-center items-center m-8"  action="/stores/update/{{$store->id}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="w-96 p-6">
            <div>
                <x-input name="name" type="text" value="{{$store->name}}">Nombre</x-input>
            </div>
            <div>
                <x-input name="phone" type="text" value="{{$store->phone}}" >Phone</x-input>
            </div>
            <div>
                <x-input name="email" type="text" value="{{$store->email}}">Email</x-input>
            </div>
            <div>
                <x-input name="address" type="text" value="{{$store->address}}" >Dirección</x-input>
            </div>
            <div>
                <x-input name="description" type="text" value="{{$store->description}}">Name</x-input>
            </div>
            <div>
                <x-input name="social_media" type="text" value="{{$store->social_media}}">Name</x-input>
            </div>

            <x-button>Actualizar</x-button>
        </div>
    </form>
</x-layout>
