<x-layout>
    <div class="mx-56 my-12">
        <h1 class="text-3xl text-center m-4 font-black text-dark-green border py-3 bg-light-brown">Carrito de compras</h1>
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
                                <div>
                                <img src="{{ asset($item->product->image) }}"
                                    alt="Coco Rose" class="product-image border-2 border-[#BC6C25] rounded-lg w-48">
                                </div>
                                <div class="mx-5">
                                    <strong>{{ $item->product->name }}</strong>
                                    <p>
                                        {{ $item->product->description }}
                                    </p>
                                </div>
                            </div>
                        </td>

                        <td class="">
                            <div class="quantity-controls mx-10">
                                <input type="text" value="{{$item->quantity}}" class="text-center" disabled>
                            </div>
                        </td>

                        <td class="text-center px-10">$ {{$item->price}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</x-layout>
