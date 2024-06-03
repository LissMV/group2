<x-layout>

    <div class="flex flex-col justify-center items-center h-screen">
        <p class="text-3xl flex justify-center h-14 text-center" syle="font-size: 10px" style="color: #79401E;">PERFIL DE TIENDA</p>
        <Form action="/Register" method="POST">
            @csrf
<div class="flex">
            <div>
                <img height="300px" width="300px"
                    src="https://cdn.icon-icons.com/icons2/3298/PNG/512/ui_user_profile_avatar_person_icon_208734.png"
                    alt="">
            </div>
            <div>
                <div class="h-14">
                    <x-input name="user" type="text" style="background: #BDBBBA " class="border-neutral-950 border solid-xl px-4 py-1.5">Nombre de tienda</x-input>
                </div>
                <div class="h-14">
                    <x-input name="phone" type="tel" style="background: #BDBBBA " class="border-double border-neutral-950 border solid-xl px-4 py-1.5">Teléfono</x-input>
                </div>
                <div class="h-14">
                    <x-input name="email" type="email" style="background: #BDBBBA " class="border-double border-neutral-950 border solid-xl px-4 py-1.5">Email</x-input>
                </div>
                <div class="h-14">
                    <x-input name="name" type="text" style="background: #BDBBBA " class="border-neutral-950 border solid-xl px-4 py-1.5">Dirección</x-input>
                </div>
                <div class="h-14">
                    <x-input name="name" type="text" style="background: #BDBBBA " class="border-neutral-950 border solid-xl px-4 py-1.5">Descripción de tienda</x-input>
                </div>
                <button class=" border-double border-neutral-950 border rounded-xl px-4 py-1.5  hover:bg-red-500"
                    type="submit" >Llenar formulario para venta de productos</button>
                </div>
            </div>
        </form>
</x-layout>
