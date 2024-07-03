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
    <section class="text-center mb-8">
        <h1 class="font-black">Esperando por la verificación</h1>
        <div>
            Por favor espera hasta que nosotros verifiquemos tu perfil y asi darte acceso para que puedas unirte como vendedor
            ¡Gracias por confiar en nosotros!
        </div>
    </section>

    @endif

    <h1 class="text-center font-black text-5xl pb-10">Actualizar datos de tienda</h1>
<section class="flex justify-center ">
    <div class="h-72 w-72 pr-10">
        <img class="mt-24" src="{{ asset('img/forms/logoo.png') }}" alt="">
    </div>
    <form class="flex justify-center items-center pl-10"  action="" method="">
        @csrf
        <div class="w-96 p-6">
            <div>
                <x-input name="name" type="text">Nombre</x-input>
            </div>
            <div>
                <x-input name="phone" type="text">Phone</x-input>
            </div>
            <div>
                <x-input name="email" type="text">Email</x-input>
            </div>
            <div>
                <x-input name="address" type="text">Dirección</x-input>
            </div>
            <div>
                <x-input name="description" type="text">Name</x-input>
            </div>
            <div>
                <x-input name="social_media" type="text">Redes sociales</x-input>
            </div>

            <x-button>Actualizar</x-button>
        </div>
    </form>
</section>
<div class="border rounded-lg drop-shadow-2xl p-6 mx-40 mb-10 bg-dark-green text-center">
    <h1 class="text-center text-2xl mb-4 text-white"> ¿Quieres agregar productos a la tienda?, presiona el siguiente botón</h1>
    <a class=" bg-light-green border p-1 px-6 text-white border-light-green" href="http://127.0.0.1:8000/productForm">Agregar productos</a>
</div>
</x-layout>
