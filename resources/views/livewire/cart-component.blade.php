{{-- @dump(Cart::instance('cart')->content()->count()) --}}
<main id="main" class="flex p-5 space-x-3 bg-gray-200">
<div class="w-9/12 p-5 bg-white">
    <div class="mb-5 text-2xl">Shopping Cart</div>

    <div class="">
        @if (Session::has('success_message'))
            <div class="bg-green-400">
                <strong>Success</strong>
                {{ Session::get('success_message') }}
            </div>
        @endif

        @if (Cart::instance('cart')->count() > 0)
            <ul>
                @foreach (Cart::instance('cart')->content() as $item)
                <li>
                    <hr class="border-gray-300">
                    <div class="flex checkoutProduct" style=" margin-bottom: 20px" >
                        <img src="{{ asset('assets/images/products') }}/{{ $item->model->image }}" alt="{{ $item->model->name }}" class="object-contain checkoutproduct__image" style="width: 180px; height: 180px;" />

                        <div class="mt-8 checkoutproduct__info " style="padding-left: 20px;" >
                            <a href="{{ route('product.details', ['slug' => $item->model->slug ]) }}" class="checkoutproduct__title" style="" >{{ $item->model->name }}</a>
                            <p class="checkoutproduct__price">
                                <small> $</small>
                                <strong>{{ $item->model->regular_price}}</strong>
                            </p>
                            <div class="flex checkoutproduct__rating">
                                <p class="text-green-500">In Stock</p>
                            </div>
                            <div class="">
                                <span class="">Qty: </span>
                                <input class="w-10" type="text" name="product-quantity" value="{{ $item->qty }}" data-max="20" pattern="[0-9]*" >
                                <a href="#" class="px-3 py-2 bg-green-400 rounded-full" wire:click.prevent="increaseQty('{{ $item->rowId }}')">+</a>
                                <a href="#" class="px-4 py-2 bg-yellow-400 rounded-full" wire:click.prevent="decreaseQty('{{ $item->rowId }}')">-</a>
                                <a href="#" class="px-3 py-2 bg-red-400 rounded-full" wire:click.prevent="destroy('{{ $item->rowId }}')">x</a>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        @else
            <div class="">No Item in Cart</div>
        @endif

        @if(Cart::instance('cart')->content()->count() > 1)
            <button class="px-4 py-2 font-bold underline bg-red-600 rounded text-md" wire:click.prevent="destroyAll()">Delete All</button>
        @endif
    </div>
</div>

<div class="w-3/12 p-5 bg-white max-h-44">
    <div class="text-xl">
        Subtotal (
        <span>
        @if (Cart::instance('cart')->count() > 0)
            {{ Cart::instance('cart')->count() }}
        @endif </span>  items):
        <span class=""><b> $ {{ Cart::instance('cart')->subtotal() }}</b></span>

    </div>
    <div class="py-1 mt-6 text-sm text-center bg-yellow-400 border border-yellow-500 rounded-md">Proceed to checkout</div>
</div>
</main>
