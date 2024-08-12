<x-layout>

    <div
        style="background: url(https://img.freepik.com/fotos-premium/menta-hoja-verde-fresca-hierbabuena-concepto-hoja-menta-uso-hierbas-aromaticas-planta-menta-crecer-background-selectivea-a-a-focus_29059-628.jpg); font-family: montserrat">

        <section class="flex justify-center items-center h-screen">
            <div class="flex h-screen place-content-center bg-white">
                <div class="w-96">
                    <img class="h-screen w-96" src="{{ asset('https://img.freepik.com/foto-gratis/productos-limpieza-ecologicos-cepillos-e-hisopos-algodon_23-2148818494.jpg') }}" alt="">
                </div>
                    <div class="col-span-2 m-8 h-2" style="color: #283618">
                        <h1 class="font-bold text-4xl m-8 h-2 text-center " style="color: #283618">Agregar Productos</h1>
                        <form class="flex justify-center items-center " action="" method="POST">
                    @csrf
                        <div class="w-96 p-3">
                        <div style="color: #283618 ">
                            <x-input name="name" type="text">Nombre</x-input>
                        </div>
                        <div>
                            <x-input name="phone" type="tel">Precio</x-input>
                        </div>
                        <div>
                            <x-input name="email" type="email">Disponible</x-input>
                        </div>
                        <div>
                            <x-input name="address" type="text">Descuento</x-input>
                        </div>
                        <div>
                            <x-input name="description" type="text">Subtitulo</x-input>
                        </div>
                        <div>
                            <x-input name="social_media" type="text">Descripción</x-input>
                            <div class="flex justify-center">
                                <button
                                    style="width: 150px; padding: 10px; margin: 10px 0;  cursor: pointer; color: #FEFAE0; background-color: #606c38;">Subir Producto</button>
                            </div>
                </form>
            </div>
    </section>
</x-layout>

