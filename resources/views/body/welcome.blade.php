<x-layout>
    <div style="font-family: montserrat">
        <div
        <header style="background-color: #606c38">
            <div class="w-full mx-auto max-w-screen-xl p-6 md:flex md:items-center md:justify-between">
                <img class="h-16 w-36"  src="{{ asset('img/branding/blanco.png') }}">
                <ul style="color: #FEFAE0" class="flex flex-wrap items-center mt-3 text-sm font-medium;">
                    <li>
                        <a href="{{ route('about_us') }}" class="hover:underline me-4 md:me-6 font-montserrat">SOBRE NOSOTROS</a>
                    </li>

                    <li>
                        <a href="{{ route('learning') }}" class="hover:underline me-4 md:me-6 font-montserrat">APRENDER</a>
                    </li>
                </ul>
            </div>
        </header>
        </div>
<section>
    <div style="display: flex; align-items: center;">
        <img style="width: 800px; margin-right:50px;" class="ml-[100px] py-5" src="https://images.stockcake.com/public/b/b/3/bb317e86-9e61-4671-ac14-c427b404e7a1_large/nurturing-new-growth-stockcake.jpg" alt="" style="width: 50%; height: 300px; object-fit: cover;">
        <div style="margin-right: 100px">
          <h2 style="font-size: 24px; color: #283618;" class="text-left h-16 font-lora">Biodegradable</h2>
          <p style="font-size: 16px; color: #606c38;" class="font-montserrat text-justify">La biodegradabilidad es la capacidad de un material de ser biodegradado. Es un proceso natural en el que un material por acción biológica, cambia y en general pierde sus propiedades originales y a nivel químico las moléculas que lo conforma se convierten en formas más simples y estables.
            No es algo que normalmente asociemos con los plásticos, ya que generalmente se crean para resistir estas fuerzas.
          </p>
        </div>
      </div>
</section>
        <section style="color: #283618">
            <p class="ml-[150px] text-3xl m-8 py-5 font-lora font-black ">Categoría de productos:</p>
        </section>

        <section class="flex justify-center">
            <div style="margin: 20px; border: 2px solid #606c38; border-radius: 8px; overflow: hidden; width: 300px; text-align: center;">
                <img style="width: 120%; height: 250px; object-fit: cover;"
                    src="https://www.heraldo.mx/wp-content/uploads/2023/05/HeraldoAgs_Generate_a_close-up_photographic_image_of_homemade_c_ed67437a-a5a4-4a8c-bad5-2543080fcda3-696x696.png"
                    alt="">
                <h3 style="margin: 10px 0; font-size: 18px; color: #606c38;" class="font-montserrat">LIMPIEZA</h3>
                <p style="margin: 0 10px 10px; font-size: 15px; color: #606c38";>Desinfectantes, papel higiénico, jabón líquido, limpiadores, desengrasantes, entre otros.</p>
            </div>

            <div style="margin: 20px; border: 2px solid #606c38; border-radius: 8px; overflow: hidden; width: 300px; text-align: center;">
                <img style="width: 120%; height: 250px; object-fit: cover;"
                    src="{{asset('img/welcome1.jpg')}}"
                    alt="">
                <h3 style="margin: 10px 0; font-size: 18px; color: #606c38;" class="font-montserrat">CUIDADO DE LA PIEL</h3>
                <p style="margin: 0 10px 10px; font-size: 15px; color: #606c38";>Crema facial, loción corporal, shampoo, exfoliante, crema para la piel, protector solar, entre otros.</p>
            </div>

            <div style="margin: 20px; border: 2px solid #606c38; border-radius: 8px; overflow: hidden; width: 300px; text-align: center;">
                <img style="width: 120%; height: 250px; object-fit: cover;"
                    src="https://content.cuerpomente.com/medio/2019/07/03/agua-floral_22aedf65_900x900.jpg"
                    alt="">
                <h3 style="margin: 10px 0; font-size: 18px; color: #606c38;" class="font-montserrat">HIGIENE PERSONAL</h3>
                <p style="margin: 0 10px 10px; font-size: 15px; color: #606c38";>Jabón, shampoo, pasta dental, cepillo dental, desodorante, crema hidratante, lociones, acondicionadores, entre otros</p>

            </div>
        </section>

            <div>
                <a href="{{ route('register') }}">
                    <x-button>Registrarse</x-button>
                </a>
                <a href="{{ route('login') }}">
                    <x-button>Iniciar sesión</x-button>
                </a>

                <footer style="background-color: #606c38">
                    <div class="w-full mx-auto max-w-screen-xl p-6 md:flex md:items-center md:justify-between">
                        <span style="color: #FEFAE0">© 2024 <a href="/learning" class="hover:underline">ECOMMUNITY</a>. TODOS LOS DERECHOS RESERVADOS</span>
                        <ul style="color: #FEFAE0" class="flex flex-wrap items-center mt-3 text-sm font-medium;">
                            <li>
                                <a href="{{ route('about_us') }}" class="hover:underline me-4 md:me-6">SOBRE NOSOTROS</a>
                            </li>
                            <li>
                                <a href="{{ route('learning') }}" class="hover:underline me-4 md:me-6">APRENDER</a>
                            </li>
                        </ul>
                    </div>
                </footer>
            </div>
        </section>
    </div>
</x-layout>
