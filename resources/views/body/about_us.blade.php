<x-layout>
<section class="ml-12 py-3">
    <div>
        <h1 class="text-4xl font-lora font-black text-center">About us</h1>

        <div class="pr-12 my-5">
        <img src="{{ asset('img/nosotros/todos2.jpg') }}">
        </div>
    </div>

    <section class="grid grid-cols-2 text-justify me-12 mt-12">
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

    <section class="me-12 mt-12 font-montserrat">
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
    <section class="mt-6 grid grid-cols-4 ml-12">
        <div class="col-span-1">
            <div class="mt-4 border p-2 border-black w-48">
                <div>
                    <img class="h-60 w-48" src="{{ asset('img/nosotros/liss.jpg') }}">
                </div>
                <div class="font-lora">
                    <p>Lisseth Mejía</p>
                    <p>Junior AM</p>
                </div>
            </div>

            <div class="mt-4 border p-2 border-black w-48">
                <div>
                    <img class="h-60 w-48" src="{{ asset('img/nosotros/hazel.jpg') }}">
                </div>
                <div class="font-lora">
                    <p>Hazel Peña</p>
                    <p>Junior AM</p>
                </div>
            </div>
        </div>
        <div>
            <div class="mt-4 border p-2 border-black w-48">
                <div>
                    <img class="h-60 w-48" src="{{ asset('img/nosotros/josue.jpg') }}">
                </div>
                <div class="font-lora">
                    <p>Josué Ramírez</p>
                    <p>Junior AM</p>
                </div>
            </div>

            <div class="mt-4 border p-2 border-black w-48">
                <div>
                    <img class="h-60 w-48" src="{{ asset('img/nosotros/karla.jpg') }}">
                </div>
                <div class="font-lora">
                    <p>Karla Cardona</p>
                    <p>Junior AM</p>
                </div>
            </div>
        </div>
        <div>
            <div class="mt-4 border p-2 border-black w-48">
                <div>
                    <img class="h-60 w-48" src="{{ asset('img/nosotros/justin.jpg') }}">
                </div>
                <div class="font-lora">
                    <p>Justin Ramírez</p>
                    <p>Junior AM</p>
                </div>
            </div>

            <div class="mt-4 border p-2 border-black w-48">
                <div>
                    <img class="h-60 w-48" src="{{ asset('img/nosotros/ricardo.jpg') }}">
                </div>
                <div class="font-lora">
                    <p>Ricardo Campos</p>
                    <p>Junior AM</p>
                </div>
            </div>
        </div>
        <div>
            <div class="mt-4 border p-2 border-black w-48">
                <div>
                    <img class="h-60 w-48" src="{{ asset('img/nosotros/echeverria.jpg') }}">
                </div>
                <div class="font-lora">
                    <p>Josué Echeverria</p>
                    <p>Junior AM</p>
                </div>
            </div>

            <div class="mt-4 border p-2 border-black w-48">
                <div>
                    <img class="h-60 w-48" src="{{ asset('img/nosotros/esmeralda.jpg') }}">
                </div>
                <div class="font-lora">
                    <p>Esmeralda Guzmán</p>
                    <p>Junior AM</p>
                </div>

            </div>
        </div>
    </section>
</section>
</x-layout>
