{{-- @dump(Cart::instance('cart')->content()) --}}
<main id="main" class="flex p-5 space-x-3 bg-gray-200">
<div class="flex flex-col w-9/12">
    <div class="w-9/12 p-5 mt-10 bg-white">
        <div class="flex justify-between mb-5">
            <div class="text-2xl">Shopping Cart</div>
            <a href="{{ route('shop') }}" class="px-4 py-2 bg-yellow-500 rounded shadow"> Shop &rarr;</a>
        </div>

        <div class="">
        @if (Cart::instance('cart')->count() > 0)

            @if (Session::has('success_message'))
                <div class="bg-green-400">
                    <strong>Success</strong>
                    {{ Session::get('success_message') }}
                </div>
            @endif

            @if (Cart::instance('cart')->count() >= 0)
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
                                <div class="space-x-3 text-sm">
                                    <span class="">Qty: </span>
                                    <input class="w-10" type="text" name="product-quantity" value="{{ $item->qty }}" data-max="20" pattern="[0-9]*" >
                                    <button class="px-3 py-2 bg-green-400 rounded-full" wire:click.prevent="increaseQty('{{ $item->rowId }}')">+</butt>
                                    <button class="px-4 py-2 bg-yellow-400 rounded-full" wire:click.prevent="decreaseQty('{{ $item->rowId }}')">-</butt>
                                    <button class="px-3 py-2 bg-red-400 rounded-full" wire:click.prevent="destroy('{{ $item->rowId }}')">x</butt>
                                    <button class="px-3 py-2 text-white bg-gray-700 rounded" wire:click.prevent="switchToSaveForLater('{{ $item->rowId }}')">Save For Later</butt>
                                </div>
                                <div class="">
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
                <button class="px-4 py-2 font-bold bg-red-600 rounded text-md" wire:click.prevent="destroyAll()">Delete All</button>
            @endif

        @else
            <div class="p-2 text-center">
                <h1>Your cart is empty</h1>
                <p class="">Add items to it now</p>
                <a href="/shop" class="">Shop now</a>
            </div>
        @endif
        </div>
    </div>

    <!-- Saved For Later -->
    <x-saved-for-later />
    </div>
</div>

<!-- Checkout -->
<div class="w-3/12 p-3 mt-10 bg-white max-h-44 min-h-20">
    <div class="text-lg flex justify-between">
        <span>
        Subtotal (
        <span>
        @if (Cart::instance('cart')->count() > 0)
            {{ Cart::instance('cart')->count() }}
        @endif </span>  items):
        </span>
        <span class=""><b> ${{ Cart::instance('cart')->subtotal() }}</b></span>
    </div>
    @if (Session::has('coupon'))
        <p class="text-lg flex justify-between">
            <span class="flex items-center">Discount ({{ Session::get('coupon')['code'] }}):
                <x-heroicon-s-x class="w-5 h-5 text-red-500 cursor-pointer" wire:click.prevent="removeCoupon()" />
            </span>
            <span> -${{ number_format($discount, 2) }}</span>
        </p>
        <p class="text-lg flex justify-between"><span class="">Subtotal with discount: </span><span> ${{ number_format($subtotalAfterDiscount, 2) }}</span></p>
        <p class="text-lg flex justify-between"><span class="">Tax ({{ config('cart.tax') }}%) x ${{ Cart::instance('cart')->subtotal() }}: </span><span> ${{ number_format($taxAfterDiscount, 2) }}</span></p>
        <p class="border border-gray-400 my-2"></p>
        <p class="text-lg flex justify-between"><span class="">Total: </span><span class="font-semibold"> ${{  number_format($totalAfterDiscount, 2) }}</span></p>
    @else
        <p class="text-lg flex justify-between"><span class="">Tax ({{ config('cart.tax') }}%): </span><span> ${{ Cart::instance('cart')->tax() }}</span></p>
        <p class="text-md">Free Shipping</p>
        <p class="border border-gray-400 my-2"></p>
        <p class="text-lg flex justify-between"><span class="">Total: </span><span class="font-semibold"> ${{ Cart::instance('cart')->total() }}</span></p>
    @endif

    <!--- Coupon code -->
    @if (!Session::has('coupon'))
    <div class="mt-2">
        <label>
            <input name="have-code" id="have-code" value="1" type="checkbox" wire:model="haveCouponCode">
            <span>I have coupon code</span>
        </label>
        @if($haveCouponCode == 1)
        <div>
            <form wire:submit.prevent="applyCouponCode">
                <h4>Coupon Code</h4>
                @if (Session::has('coupon_message'))
                    <div class="bg-red-400 px-4 py-2 rounded my-1">
                        {{-- hello --}}
                        {{ Session::get('coupon_message') }}
                    </div>
                @endif
                <p>
                    <label for="coupon-code">Enter your coupon code:</label>
                    <input type="text" name="coupon-code" wire:model="couponCode">
                </p>
                <button type="submit" class="px-4 py-2 bg-gray-700 rounded shadow my-2 text-white">Apply</button>
            </form>
        </div>
        @endif
    </div>
    @endif
    <button wire:click.prevent="checkout" class="py-1 mt-6 text-sm text-center bg-yellow-400 border border-yellow-500 rounded-md">Proceed to checkout</button>
</div>
</main>
