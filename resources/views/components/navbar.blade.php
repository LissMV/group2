<section {{ $attributes->merge(['class' => 'bg-azul py-2']) }}>
    <nav class="flex  items-center space-x-8 ps-2 mr-10">
        <div x-data="{ open: false }">
            <button @click="$dispatch('toggle-sidebar')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                        class="bi bi-cart4 text-white" />
                </svg>
            </button>

        </div>


        <a href="{{ route('home') }}">
            <img class="h-16 w-40" src="{{ asset('img/branding/blanco.png') }}">
        </a>
        <form action="{{ route('search') }}" method="get" class="w-full">
            @csrf
            <div class="rounded-full bg-white py-2 px-7 border border-dark-green flex ms-12 mr-12">
                <input type="search" name="search" id="search" placeholder="Búsqueda"
                    class="w-full focus:ring-0 focus:outline-none">
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </button>
            </div>
        </form>

        <a href="{{ route('shoppingCart') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                class="bi bi-cart4 text-white" viewBox="0 0 16 16">
                <path
                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
            </svg>
        </a>
        <a class="" href="{{ route('usersEdit') }}">
            <img class="w-16 h-12 rounded-full  items-center justify-center" src="{{ asset(Auth::user()->image) }}"
                alt="">
        </a>
    </nav>
</section>
