<x-layout>
<section class="pt-3">
    <div class="mx-56 my-10">
        <h1 class="text-3xl text-center m-4 font-black text-green border py-3 bg-verde_menta">Acerca de nosotros</h1>
    </div>

    <img src="{{ asset('img/nosotros/todos2.jpg') }}" class="w-11/12 mx-auto">

    <section class="grid grid-cols-2 text-justify me-12 mt-12 ml-12">
        <div class="border-r-4 border-azul col-span-1 font-montserrat">
            <h1 class="text-center border p-3 bg-verde border-azul text-white">Visión</h1>
            <h1 class="me-4 mt-4">Nuestra visión es ser el principal impulsor del mercado de productos biodegradables y
                ecológicos, transformando la manera en que los consumidores comprenden y acceden a
                productos sostenibles. Aspiramos a crear un futuro donde los productos ecológicos sean la
                norma, y donde los pequeños empresarios prosperen en una economía verde y equitativa.</h1>
        </div>
        <div class="font-montserrat ">
            <h1 class="text-center border p-3 bg-verde border-azul text-white">Misión</h1>
            <h1 class="ps-4 mt-4">Nuestra misión es empoderar a los pequeños empresarios que producen bienes
                biodegradables y ecológicos, proporcionándoles una plataforma que amplifique su alcance
                y promueva el consumo sostenible. Nos comprometemos a conectar a los consumidores
                conscientes con productos que respeten y protejan el medio ambiente, fomentando una
                comunidad de apoyo mutuo y responsabilidad ecológica.</h1>
        </div>
    </section>

    <h1 class="font-black text-4xl font-lora mt-16 mb-10 text-center">Valores</h1>
    <section class="me-12 mt-12 font-montserrat ml-12">
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
                <h1 class="border p-3 bg-white2 border-dark-green border-md mr-24 mb-4 rounded-lg"
                >Sostenibilidad</h1

            </div>

        </div>
    </section>

    <h1 class="font-black text-4xl font-lora mt-16 mb-10 ml-12 text-center">Integrantes</h1>
    <section class="mt-6 grid grid-cols-4 ml-12">
        <div class="col-span-1">
            <div class="mt-4 border p-2 border-black w-48 mx-auto">
                <div>
                    <img class="h-60 w-48" src="{{ asset('img/nosotros/liss.jpg') }}">
                </div>
                <div class="font-lora">
                    <p>Lisseth Mejía</p>
                    <p>Programador backend</p>
                </div>
            </div>

            <div class="mt-4 border p-2 border-black w-48 mx-auto">
                <div>
                    <img class="h-60 w-48" src="{{ asset('img/nosotros/hazel.jpg') }}">
                </div>
                <div class="font-lora">
                    <p>Hazel Peña</p>
                    <p>Programador Frontend</p>
                </div>
            </div>
        </div>
        <div>
            <div class="mt-4 border p-2 border-black w-48 mx-auto">
                <div>
                    <img class="h-60 w-48" src="{{ asset('img/nosotros/josue.jpg') }}">
                </div>
                <div class="font-lora">
                    <p>Josué Ramírez</p>
                    <p>Diseñador de marca</p>
                </div>
            </div>

            <div class="mt-4 border p-2 border-black w-48 mx-auto">
                <div>
                    <img class="h-60 w-48" src="{{ asset('img/nosotros/karla.jpg') }}">
                </div>
                <div class="font-lora">
                    <p>Karla Cardona</p>
                    <p>Diseñador de marca</p>
                </div>
            </div>
        </div>

        <div>
            <div class="mt-4 border p-2 border-black w-48 mx-auto">
                <div>
                    <img class="h-60 w-48" src="{{ asset('img/nosotros/justin.jpg') }}">
                </div>
                <div class="font-lora">
                    <p>Justin Ramírez</p>
                    <p>Diseñador UX/UI</p>
                </div>
            </div>

            <div class="mt-4 border p-2 border-black w-48 mx-auto">
                <div>
                    <img class="h-60 w-48" src="{{ asset('img/nosotros/ricardo.jpg') }}">
                </div>
                <div class="font-lora">
                    <p>Ricardo Campos</p>
                    <p>Programador Frontend</p>
                </div>
            </div>
        </div>
        <div>
            <div class="mt-4 border p-2 border-black w-48 mx-auto">
                <div>
                    <img class="h-60 w-48" src="{{ asset('img/nosotros/echeverria.jpg') }}">
                </div>
                <div class="font-lora">
                    <p>Josué Echeverria</p>
                    <p>Programador Backend</p>
                </div>
            </div>

            <div class="mt-4 border p-2 border-black w-48 mx-auto">
                <div>
                    <img class="h-60 w-48" src="{{ asset('img/nosotros/esmeralda.jpg') }}">
                </div>
                <div class="font-lora">
                    <p>Esmeralda Guzmán</p>
                    <p>Diseñador de marca</p>
                </div>
            </div>
        </div>
    </section>

    <h1 class="font-black text-4xl font-lora mt-16 mb-10 text-center">Roles de presentación</h1>
    <section class="grid grid-cols-3 pl-10 bg-verde_menta mt-3 py-6">
        <div class="my-4 border p-2 border-black w-64 h-96 bg-white mx-auto">
            <div>
                <img class="h-72 w-72" src="{{ asset('img/nosotros/pitch_team.jpg') }}">
            </div>
            <div class="font-lora">
                <p>Justin Ramiréz, Josué Ramiréz y Hazel Peña</p>
                <p>-Presentación </p>
            </div>
        </div>

        <div class="my-4 border p-2 border-black w-64 h-96 bg-white mx-auto">
            <div>
                <img class="h-72 w-72" src="{{ asset('img/nosotros/Q&A_team.jpg') }}">
            </div>
            <div class="font-lora">
                <p>Lisseth Mejía y Josué Echeverria</p>
                <p>-Sección de Q&A</p>
            </div>
        </div>

        <div class="my-4 border p-2 border-black w-64 h-96 bg-white mx-auto">
            <div>
                <img class="h-72 w-72" src="{{ asset('img/nosotros/networking_team.jpg') }}">
            </div>
            <div class="font-lora">
                <p>Karla Cardona, Ricardo Campos y Esmeralda Guzmán</p>
                <p>-Sección de networking</p>
            </div>
        </div>
    </section>
</section>
</x-layout>
