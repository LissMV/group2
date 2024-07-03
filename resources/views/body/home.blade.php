<x-layout>

    <div class="flex justify-center">
        <img width="650px" src="{{ asset('img/Home 1.png') }}" alt="">
    </div>

    <div class="flex justify-center">
        <button
            class="font-serif  text-2xl m-8 border-double border-neutral-950 border rounded-xl px-4 py-1.5  hover:bg-light-brown "
            type="submit">Comunidad</button>

        <button
            class="font-serif text-2xl m-8 border-double border-neutral-950 border rounded-xl px-4 py-1.5  hover:bg-light-brown    "
            type="submit">Aprende más</button>
    </div>
    "
    <div class="grid grid-cols-3">
        <div class="mx-8">
            <img height="100px" width="350px" src="{{ asset('img/Home 2.png') }}" alt="">
            <div class="mx-32 font-bold ">
                <p>Product</p>
                <h2>$10.99</h2>
            </div>
        </div>

        <div class="mx-8">
            <img height="100px" width="600px" src="{{ asset('img/Home 3.png') }}" alt="">

            <div class="mx-40 font-bold">
                <p>Product</p>
                <h2>$10.99</h2>
            </div>
        </div>

        <div>
            <img height="200px" width="300px" class="mx-8" src="{{ asset('img/Home 4.png') }}" alt="">

            <div class="mx-40 font-bold">
                <p>Product</p>
                <h2>$10.99</h2>
            </div>
        </div>

        <div class="mx-8">
            <img height="200px" width="350px" src="{{ asset('img/Home 5.png') }}" alt="">

            <div class="mx-28 font-bold">
                <p>Product</p>
                <h2>$10.99</h2>
            </div>
        </div>

        <div>
            <img height="200px" width="600px" src="{{ asset('img/Home 6.png') }}" alt="">

            <div class="mx-40 font-bold">
                <p>Product</p>
                <h2>$10.99</h2>
            </div>
        </div>

        <div class="mx-8">
            <img height="100px" width="300px" class="-m-4" src="{{ asset('img/Home 7.png') }}" alt="">

            <div class="mx-28 font-bold">
                <p>Product</p>
                <h2>$10.99</h2>
            </div>
        </div>
    </div>

    <div>
        <h1 class=" my-8 mx-8 text-2xl font-bold ">Heading</h1>

    </div>

    <div class="grid grid-cols-2 mx-28 m-4">
        <div>
            <img height="200px" width="400px" class="mx-8" src="{{ asset('img/Home 8.png') }}" alt="">

        </div>

        <div>
            <img height="200px" width="400px" class="mx-8" src="{{ asset('img/Home 9.png') }}" alt="">

        </div>

        <div>
            <img height="200px" width="400px" class="mx-8 my-10" src="{{ asset('img/Home 10.png') }}" alt="">
        </div>

        <div>
            <img height="200px" width="400px" class="mx-8 my-10" src="{{ asset('img/Home 11.png') }}" alt="">

        </div>


    </div>

</x-layout>
