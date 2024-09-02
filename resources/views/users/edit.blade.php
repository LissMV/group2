<x-layout>
    <section class="flex justify-center ml-24 my-3 border-2 border-double border-brown mr-24">
        <div class="card profile-widget">
            <h1 class="font-bold text-6xl text-center m-4">Editar perfil</h1>
            <form class="flex justify-center items-center needs-validation" action="{{ route('users.edit.update') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <div class="w-96 p-6">
                    <div class="profile-widget-header flex items-center justify-center">
                        <img alt="image" src="{{ asset(Auth::user()->image) }}"
                            class="rounded-full profile-widget-picture h-56 w-56">
                    </div>
                    <div class="form-group col-12">
                        <label>Foto de perfil</label>
                        <input type="File" name="image">
                    </div>
                    <div>
                        <x-input name="name" type="text" value="{{ $user->name }}">Nombre</x-input>
                    </div>
                    <div>
                        <x-input name="email" type="text" value="{{ $user->email }}">Correo</x-input>
                    </div>

                    <div class="flex">
                        <a href="">
                            <x-button>Actualizar</x-button>
                        </a>
                    </div>
            </form>
            <form action="/logout" method="POST">
                @csrf
                <a href="#" onclick="this.closest('form').submit()"
                    class=" bg-light-green border p-1 px-6 text-white border-light-green">
                    cerrar sessión
                </a>
            </form>
        </div>
    </section>

    <div class="p-2 bg-brown mr-24 ml-24">
        <a href="{{ route('store') }}">
            <h1 class="text-center font-montserrat text-white2">¿Quieres iniciar como vendedor?</h1>
        </a>
    </div>

    @if ($user->is_seller)
        <section class="text-center mb-8">
            <h1 class="font-black">Esperando por la verificación</h1>
            <div>
                Por favor espera hasta que nosotros verifiquemos tu perfil y asi darte acceso para que puedas unirte
                como vendedor
                ¡Gracias por confiar en nosotros!
            </div>
        </section>

        @foreach ($stores as $tienda)
            <h1 class="text-center text-5xl pb-10 mt-5 font-lora">Actualizar datos de tienda {{ $tienda->name }}</h1>
            <section class="flex justify-center ">
                <form class="flex justify-center items-center pl-10" action="{{ route('stores.edit.update') }}"
                    method="POST">
                    @csrf
                    <div class="w-96 p-6">
                        <div class="profile-widget-header flex items-center justify-center">
                            <img alt="image" src="{{$tienda->image}}"
                            class="rounded-full profile-widget-picture h-56 w-56">
                        </div>
                        <div class="form-group col-12">
                            <label>Foto de tienda {{$tienda->name}} </label>
                            <input type="File" name="image">
                        </div>
                        <div>
                            <x-input name="name" type="text" value="{{ $tienda->name }}">Nombre</x-input>
                        </div>
                        <div>
                            <x-input name="phone" type="text" value="{{ $tienda->phone }}">Phone</x-input>
                        </div>
                        <div>
                            <x-input name="email" type="text" value="{{ $tienda->email}}" >Email</x-input>
                        </div>
                        <div>
                            <x-input name="address" type="text" value="{{ $tienda->address}}">Dirección</x-input>
                        </div>
                        <div>
                            <x-input name="description" type="text" value="{{ $tienda->description}}">Descripción</x-input>
                        </div>
                        <div>
                            <x-input name="social_media" type="text" value="{{ $tienda->social_media}}">Redes sociales</x-input>
                        </div>

                        <x-button>Actualizar</x-button>
                    </div>
                </form>
            </section>
            <div class="border rounded-lg drop-shadow-2xl p-6 mx-40 mb-10 bg-dark-green text-center">
                <h1 class="text-center text-2xl mb-4 text-white"> ¿Quieres agregar productos a la tienda?, presiona el
                    siguiente botón</h1>
                <a class=" bg-light-green border p-1 px-6 text-white border-light-green"
                    href="http://127.0.0.1:8000/addProduct">Agregar productos</a>
            </div>
        @endforeach

    @endif


</x-layout>
