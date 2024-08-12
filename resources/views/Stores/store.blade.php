<x-layout>

    <div
        style="background: url(https://i.pinimg.com/564x/4c/55/eb/4c55eb34a9769bc6cfd6904919dc7f94.jpg); font-family: montserrat">

        <section class="flex justify-center items-center h-screen">
            <div class="flex h-screen place-content-center bg-white">
                <div class="w-96">
                    <img class="h-screen w-96" src="{{ asset('https://img.freepik.com/premium-photo/natural-skincare-cosmetics-bottles-products-with-green-plant-vertical-background-with-copy-space-beauty-skin-care-herbal-organic-product-deep-hydration-soothing-ai-generative-content_70898-10769.jpg') }}" alt="">
                </div>
                    <div class="col-span-2 m-8 h-2" style="color: #283618">
                        <h1 class="font-bold text-4xl m-8 h-2 text-center " style="color: #283618">Formulario De Tienda</h1>
                        <form class="flex justify-center items-center " action="" method="POST">
                    @csrf
                        <div class="w-96 p-3">
                        <div style="color: #283618 ">
                            <x-input name="name" type="text">Nombre de tienda</x-input>
                        </div>
                        <div>
                            <x-input name="phone" type="tel">Teléfono</x-input>
                        </div>
                        <div>
                            <x-input name="email" type="email">Email</x-input>
                        </div>
                        <div>
                            <x-input name="address" type="text">Dirección</x-input>
                        </div>
                        <div>
                            <x-input name="description" type="text">Descripción de tienda</x-input>
                        </div>
                        <div>
                            <x-input name="social_media" type="text">Redes sociales</x-input>
                            <div class="flex justify-center">
                                <button
                                    style="width: 150px; padding: 10px; margin: 10px 0;  cursor: pointer; color: #FEFAE0; background-color: #606c38;">Enviar</button>
                            </div>
                </form>
            </div>
    </section>
</x-layout>
