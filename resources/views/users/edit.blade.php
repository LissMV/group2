<x-layout>
    <form class="text-center my-16" action="/users/update/{{$user->id}}" method="POST">
        @csrf
        @method('PATCH')
        <h1 class="font-bold text-6xl">Editar perfil</h1>
        <div class="font-semibold m-8 text-2xl">
            <div class="m-8">
                <x-input name="name" type="text" value="{{$user->name}}">Name</x-input>
            </div>
            <div class="m-8">
                <x-input name="email" type="text">Email</x-input>
            </div>

            <button class="m-8 border-double border-neutral-950 border rounded-xl px-4 py-1.5  hover:bg-indigo-500 "
                type="submit">Crear cuenta</button>
        </div>
    </form>

    @if($user->is_seller)
        <div>
         espera por la verificacion
        </div>
  
    @endif
</x-layout>
