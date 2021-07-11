{{-- @dump(Cart::content()) --}}
<main id="main" class="p-5 flex space-x-3 bg-gray-200">
<div class="w-9/12 bg-white p-5">
    <div class="text-2xl mb-5">Shopping Cart</div>

    <div class="">
    @if (Session::has('success_message'))
        <div class="bg-green-400">
            <strong>Success</strong>
            {{ Session::get('success_message') }}
        </div>
    @endif

    @if (Cart::count() > 0)
    <ul>
        @foreach (Cart::content() as $item)
        <li>
            <hr class="border-gray-300">
            <div class="flex checkoutProduct" style=" margin-bottom: 20px" >
                <img src="{{ asset('assets/images/products') }}/{{ $item->model->image }}" alt="{{ $item->model->name }}" class="object-contain checkoutproduct__image" style="width: 180px; height: 180px;" />

                <div class="checkoutproduct__info mt-8 " style="padding-left: 20px;" >
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
                        <a href="#" class="py-2 px-3 rounded-full bg-green-400" wire:click.prevent="increaseQty('{{ $item->rowId }}')">+</a>
                        <a href="#" class="py-2 px-4 rounded-full bg-yellow-400" wire:click.prevent="decreaseQty('{{ $item->rowId }}')">-</a>
                        <a href="#" class="py-2 px-3 rounded-full bg-red-400" wire:click.prevent="destroy('{{ $item->rowId }}')">x</a>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>

    @else
        <div class="">No Item in Cart</div>
    @endif

    </div>
</div>

<div class="w-3/12 p-5 bg-white max-h-44">
    <div class="text-xl">
        Subtotal (
        <span>
        @if (Cart::count() > 0)
            {{ Cart::count() }}
        @endif </span>  items):
        <span class=""><b> $ {{ Cart::subtotal() }}</b></span>

    </div>
    <div class="border text-sm py-1 rounded-md bg-yellow-400 border-yellow-500 text-center mt-6">Proceed to checkout</div>
</div>
</main>
