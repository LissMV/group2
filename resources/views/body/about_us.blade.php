<x-layout>

    <div>
        <div>
        <img class="mt-24 pe-24 h-72 w-full" src="{{ asset('https://lacamara.pe/wp-content/uploads/2023/02/IDEXCAM-1.jpg') }}" alt="">
        </div>

        <div class="">
            <h1 class="text-4xl font-lora font-black">About us</h1>
        </div>
    </div>

    <section class="grid grid-cols-2 text-justify me-24 mt-12">
        <div class="border-r-4 border-brown col-span-1 font-montserrat">
            <h1 class="text-center font-black border p-3 bg-light-brown border-brown">Visión</h1>
            <h1 class="me-4 mt-4">Nuestra visión es ser el principal impulsor del mercado de productos biodegradables y
                ecológicos, transformando la manera en que los consumidores comprenden y acceden a
                productos sostenibles. Aspiramos a crear un futuro donde los productos ecológicos sean la
                norma, y donde los pequeños empresarios prosperen en una economía verde y equitativa.</h1>
        </div>
        <div class="font-montserrat ">
            <h1 class="text-center font-black border p-3 bg-light-brown border-brown">Misión</h1>
            <h1 class="ps-4 mt-4">Nuestra mision es empoderar a los pequeños empresarios que producen bienes
                biodegradables y ecológicos, proporcionándoles una plataforma que amplifique su alcance
                y promueva el consumo sostenible. Nos comprometemos a conectar a los consumidores
                conscientes con productos que respeten y protejan el medio ambiente, fomentando una
                comunidad de apoyo mutuo y responsabilidad ecológica.</h1>
        </div>
    </section>

    <section class="me-24 mt-16 font-montserrat">
            <h1 class="font-black text-4xl font-lora">Valores:</h1>

        <div class="grid grid-cols-2 text-center mt-6">
            <div class="col-span-1 ml-24">
                <h1 class="border p-3 bg-white2 border-dark-green border-md mr-12 mb-4 rounded-lg"
                >Integridad</h1>
                <h1 class="border p-3 bg-white2 border-dark-green border-md mr-12 rounded-lg"
                >Empatía</h1>
            </div>
            <div class="ml-14">
                <h1 class="border p-3 bg-white2 border-dark-green border-md mr-24 mb-4 rounded-lg"
                >Compromiso</h1>
                <h1 class="border p-3 bg-white2 border-dark-green border-md mr-24 rounded-lg
                ">Equidad</h1>
            </div>
        </div>
    </section>

    <h1 class="font-black text-4xl font-lora mt-10">Integrantes:</h1>
    <section class="mt-6 pe-24 grid grid-cols-4">
        <div class="col-span-1">
            <div class="mt-4 border p-2 border-black w-44">
                <div class="h-64 w-40">
                    <img src="{{ asset('img/nosotros/mujer.png') }}">
                </div>
                <div class="font-lora">
                    <p>Lisseth Mejía</p>
                    <p>Junior AM</p>
                </div>
            </div>

            <div class="mt-4 border p-2 border-black w-44">
                <div class="h-64 w-40">
                    <img src="{{ asset('img/nosotros/mujer.png') }}">
                </div>
                <div class="font-lora">
                    <p>Hazel Peña</p>
                    <p>Junior AM</p>
                </div>
            </div>
        </div>
        <div>
            <div class="mt-4 border p-2 border-black w-44">
                <div class="h-64 w-40">
                    <img src="{{ asset('img/nosotros/hombre.png') }}">
                </div>
                <div class="font-lora">
                    <p>Josué Ramírez</p>
                    <p>Junior AM</p>
                </div>
            </div>

            <div class="mt-4 border p-2 border-black w-44">
                <div class="h-64 w-40">
                    <img src="{{ asset('img/nosotros/mujer.png') }}">
                </div>
                <div class="font-lora">
                    <p>Carla Cardona</p>
                    <p>Junior AM</p>
                </div>
            </div>
        </div>
        <div>
            <div class="mt-4 border p-2 border-black w-44">
                <div class="h-64 w-40">
                    <img src="{{ asset('img/nosotros/hombre.png') }}">
                </div>
                <div class="font-lora">
                    <p>Justin Ramírez</p>
                    <p>Junior AM</p>
                </div>
            </div>

            <div class="mt-4 border p-2 border-black w-44">
                <div class="h-64 w-40">
                    <img src="{{ asset('img/nosotros/hombre.png') }}">
                </div>
                <div class="font-lora">
                    <p>Ricardo Campos</p>
                    <p>Junior AM</p>
                </div>
            </div>
        </div>
        <div>
            <div class="mt-4 border p-2 border-black w-44">
                <div class="h-64 w-40">
                    <img src="{{ asset('img/nosotros/hombre.png') }}">
                </div>
                <div class="font-lora">
                    <p>Josué Echeverria</p>
                    <p>Junior AM</p>
                </div>
            </div>

            <div class="mt-4 border p-2 border-black w-44">
                <div class="h-64 w-40">
                    <img src="{{ asset('img/nosotros/mujer.png') }}">
                </div>
                <div class="font-lora">
                    <p>Esmeralda Guzmán</p>
                    <p>Junior AM</p>
                </div>
            </div>
        </div>
    </section>
</x-layout>
