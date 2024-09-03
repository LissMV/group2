<x-layout>
    <div class="p-2.5 flex justify-between items-center text-white bg-[#606c38]">
        <strong class="ml-[150px] text-2xl m-8 ">Carrito de compras</strong>
        <hr class="my-5">
    </div>

    @if($shoppingCart->cartItems->isEmpty())
        <h1 class="text-center mt-16">Aún no has agregado nada al carrito</h1>
    @else
        <table class="cart-table mt-5 mx-auto">
            <thead>
                <tr class="text-[#283618]">
                    <th>Detalles de productos</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                </tr>
            </thead>

            <tbody>
                @foreach($shoppingCart->cartItems as $item)
                    <tr class="w-full">
                        <td class="flex">
                            <div class="m-5 flex items-center">
                                <img src="https://www.sephora.com/productimages/sku/s1754548-av-8-zoom.jpg?imwidth=315"
                                    alt="Coco Rose" class="product-image w-48 border-2 border-[#BC6C25] rounded-lg">
                                <div class="mx-5">
                                    <strong>Coco Rose</strong><br>
                                    Exfoliante<br>
                                    Remover
                                </div>
                            </div>
                        </td>

                        <td class="">
                            <div class="quantity-controls mx-10">
                                <button>-</button>
                                <input type="text" value="1" class="text-center">
                                <button>+</button>
                            </div>
                        </td>

                        <td class="text-center px-10">$8.50</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</x-layout>
