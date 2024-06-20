<x-layout>

    <div class="flex flex-col justify-center items-center h-screen">
        <p class="text-3xl flex justify-center h-14 text-center" syle="font-size: 10px" style="color: #79401E;">AGREGAR
            PRODUCTOS</p>
        <Form action="/Register" method="POST">
            @csrf
            <div class="flex">
                <div>
                    <img height="300px" width="300px"
                        src="https://img.freepik.com/vector-gratis/ilustracion-papel_53876-5846.jpg?size=626&ext=jpg&ga=GA1.1.1788068356.1716508800&semt=ais_user"
                        alt="">
                </div>
                <div>
                    <div class="h-14">
                        <x-input name="user" type="text">Esta disponible</x-input>
                    </div>
                    <div class="h-14">
                        <x-input name="phone" type="tel">Precio</x-input>
                    </div>
                    <div class="h-14">
                        <x-input name="email" type="email">Descuento</x-input>
                    </div>
                    <div class="h-14">
                        <x-input name="name" type="text">Nombre</x-input>
                    </div>
                    <div class="h-14">
                        <x-input name="name" type="text">Subtitulo</x-input>
                    </div>
                    <div>
                        <div class="h-14">
                            <x-input name="name" type="text">Descripción</x-input>
                        </div>
                        <div class="h-14">
                            <button class=" border-double border-neutral-950 border rounded-xl px-4 py-1.5 bg-light-brown"
                                type="submit">Subir productos</button>
                        </div>
        </form>
</x-layout>
