<div {{ $attributes->merge(['class' => '']) }}>
    <nav class="bg-light-green h-full border-t-4  border-r-4 border-dark-green">
        <img src="{{ asset('img/branding/blanco_verde') }}" alt="">
        <div class="mt-24 text-white2 ml-6 font-lora">
            <a href="">
                <h1>Home</h1>
            </a>
            <a href="">
                <h1>Aprende más</h1>
            </a>
            <a href="">
                <h1>Tiendas</h1>
            </a>
            <div x-data="{ open: false }">
                <button @click="open = !open">Categorias</button>

                <div x-show="open">
                    @foreach ($categories as $categoria)
                        <p>{{$categoria->name}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </nav>
</div>
