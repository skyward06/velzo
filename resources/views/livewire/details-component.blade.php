<div class="p-11 inline-flex space-x-3 w-full">
    <div class="bg-green-400 w-2/6">
        <img src="{{ asset('assets/images/products/') }}/{{ $product->image }}" alt="" class="w-full h-80">
    </div>

    <div class="text-sm w-3/6 px-2">
        <div class="text-2xl font-bold">{{ $product->name }}</div>
        <div class=" text-green -600 leading-9">Visit the store</div>
        <div class="my-1">⭐⭐⭐⭐</div>
        <hr class="bg-gray-300 h-0.5 my-2">
        <div class="my-2">
            <span class="align-top">Price: </span>
            <span class="text-lg font-semibold text-yellow-600">${{ $product->regular_price }}</span>
        </div>

        <hr class="bg-gray-300 h-0.5 my-2">
        <div class="text-xl font-bold">About this item</div>
        <div class="">{{ $product->description }}</div>
    </div>

    <div class="w-1/6 p-2 border border-1 border-gray-500">
        <div class="text-lg font-semibold text-yellow-600">${{ $product->regular_price }}</div>
        <div class="text-gray-600 text-sm">+ $29.12 Shipping & Import Fees Deposit to Indonesia Details </div>
        <div class="text-sm leading-10">Arrives: <span class="font-semibold">Sunday, January 01</span> </div>
        <div class="text-xl text-green-600 font-bold">{{ $product->stock_status }}</div>

        <a href="#" class="block bg-yellow-300 p-2 border cursor-pointer border-black text-sm w-full mt-1 focus:outline-none"
            wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}' ,{{ $product->regular_price}})">
                Add to Cart
        </a>
        <a href="#" class="block bg-yellow-500 p-2 border border-black text-sm w-full mt-2 focus:outline-none">Buy Now</a>
    </div>

    </div>
