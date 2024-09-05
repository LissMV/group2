<x-layout>
    <section class="flex justify-center items-center mt-6">
        <a href="{{ route('events') }}">
            <x-button>Eventos Pasados</x-button>
        </a>
        <a href="{{ route('events') }}" class="ml-4">
            <x-button>Eventos Futuros</x-button>
        </a>
    </section>

    <div class="mx-56 my-8">
        <h1 class="text-3xl text-center m-4 font-black text-dark-green border py-3 bg-light-brown">Foro</h1>
    </div>

    <section class="mx-24 space-y-6">
        <div>
            <div class="flex space-x-3">
                <img src="{{ asset('https://pbs.twimg.com/profile_images/1395283943549595651/XeHP4u2r_400x400.jpg') }}"
                    class="h-10 rounded-full">
                <h1 class="mt-2 font-montserrat">Valentina Díaz</h1>
            </div>
            <p class="text-justify mt-1">Holaa! tengo una duda de que tan buenos son los cepillos dentales de bambú, me
                gustaria saber las distitas
                opiniones de las personas que ya hayan usado este producto, me ayudaria mucho, gracias!
            </p>
            <p class="border-b-2 pb-2 border-gray-400 text-end">Respuestas</p>
        </div>

        <div>
            <div class="flex space-x-3">
                <img src="{{ asset('https://i.pinimg.com/474x/cb/5d/64/cb5d64be736ab84602ee1bcd20303d4e.jpg') }}"
                    class="h-10 rounded-full w-10">
                <h1 class="font-montserrat mt-2">Alfredo Castillo</h1>
            </div>
            <p class="text-justify mt-1">Buenas tardes a todos, como persona que lleva ya 11 años años comprando
                productos biodegradables me gustaria
                recomendar a las personas a usar bloqueador solar que sea cruelty-free, estos bloqueadores contienen
                aloe vera,
                zanahoria, té verde y aceite de girasol, muy bueno para tu piel y protege muy bien.
            </p>
            <p class="border-b-2 pb-2 border-gray-400 text-end">Respuestas</p>
        </div>

        <div>
            <div class="flex space-x-3">
                <img src="{{ asset('https://th.bing.com/th/id/OIP.W-ug7vUxgXNbvRcWN1wkRwHaHa?rs=1&pid=ImgDetMain') }}"
                    class="h-10 rounded-full">
                <h1 class="font-montserrat mt-2">Lucia Calorina</h1>
            </div>
            <p class="text-justify mt-1">Desde que empecé a usar productos eco-friendly, he notado una gran diferencia
                en mi piel y en mi conciencia.
                Me encanta saber que estoy haciendo algo positivo por el planeta y los animales. ¡Totalmente
                recomendados!
            </p>
            <p class="border-b-2 pb-2 border-gray-400 text-end">Respuestas</p>
        </div>

        <div>
            <div class="flex space-x-3">
                <img src="{{ asset('https://media.licdn.com/dms/image/C4D03AQFaomZCAxqppQ/profile-displayphoto-shrink_800_800/0/1643191581223?e=2147483647&v=beta&t=CGN4D3KSWavzphaeJy6kWra0BMq7tAPDVSRTKCCldTc') }}"
                    class="h-10 rounded-full">
                <h1 class="font-montserrat mt-2">Andrés Valencia</h1>
            </div>
            <p class="text-justify mt-1">Los productos cruelty-free son una excelente opción para quienes queremos
                cuidar de los animales y del medio ambiente.
                Además, muchos de estos productos son de alta calidad y muy efectivos. ¡No hay excusa para no probarlos
            </p>
            <p class="border-b-2 pb-2 border-gray-400 text-end">Respuestas</p>
        </div>

        <div>
            <div class="flex space-x-3">
                <img src="{{ asset('https://yt3.googleusercontent.com/ytc/AGIKgqNbQrT7HWW4HZkgKEsgIRS95AbKxs3rpAVGatqGtw=s900-c-k-c0x00ffffff-no-rj') }}"
                    class="h-10 rounded-full">
                <h1 class="font-montserrat mt-2">Antonio Salazar</h1>
            </div>
            <p class="text-justify mt-1">Me encanta comprar productos locales y eco-friendly. Siento que estoy
                contribuyendo a una economía más sostenible y
                reduciendo mi huella de carbono. Además, los productos son de excelente calidad y duran mucho tiempo
            </p>
            <p class="border-b-2 pb-2 border-gray-400 text-end">Respuestas</p>
        </div>

        <div class="border-gray-400 border-b-2 text-end ">
            <div class="flex space-x-3">
                <img src="{{ asset('https://mir-s3-cdn-cf.behance.net/project_modules/1400/15a9b273290303.5c051d7118165.jpg') }}"
                    class="h-10 rounded-full w-10">
                <h1 class="font-montserrat mt-2">Ann Marisol</h1>
            </div>
            <p class="text-justify mt-1">He estado usando productos eco-friendly y cruelty-free para el cuidado de mi
                rostro y los resultados han sido increíbles.
                Mi piel se siente más suave y saludable, y me encanta saber que no estoy contribuyendo al maltrato
                animal ni al daño
                ambiental. ¡Definitivamente los recomiendo a todos!
            </p>
            <p class="pb-2">Respuestas</p>

        </div>
    </section>

</x-layout>
