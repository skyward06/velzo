{{-- @dump($popular_product) --}}
{{-- @dump($related_products) --}}
{{-- @dump($product->name) --}}

<div class="inline-flex w-full space-x-3 p-11">
    <div class="w-2/6 bg-green-400">
        <img src="{{ asset('assets/images/products/') }}/{{ $product->image }}" alt="" class="w-full h-80">
    </div>

    <div class="w-3/6 px-2 text-sm">
        <div class="text-2xl font-bold">{{ $product->name }}</div>
        <div class="leading-9 text-green -600">Visit the store</div>
        <div class="my-1">⭐⭐⭐⭐</div>
        <hr class="bg-gray-300 h-0.5 my-2">
        <div class="my-2">
            <span class="align-top">Price: </span>
            @if ($product->sale_price > 0)
            <span class="text-lg font-semibold text-yellow-600">${{ $product->sale_price }}</span>
            <del><span class="text-md italic font-semibold text-gray-600">${{ $product->regular_price }}</span></del>
            @else
            <span class="text-lg font-semibold text-yellow-600">${{ $product->regular_price }}</span>
            @endif
        </div>

        <hr class="bg-gray-300 h-0.5 my-2">
        <div class="text-xl font-bold">About this item</div>
        <div class="">{{ $product->description }}</div>
    </div>

    <div class="w-1/6 p-2 border border-gray-500 border-1">
        @if ($product->sale_price > 0)
        <div class="text-lg font-semibold text-yellow-600">${{ $product->sale_price }}</div>
        @else
        <div class="text-lg font-semibold text-yellow-600">${{ $product->regular_price }}</div>
        @endif
        <div class="text-sm text-gray-600">+ $29.12 Shipping & Import Fees Deposit to Indonesia Details </div>
        <div class="text-sm leading-10">Arrives: <span class="font-semibold">Sunday, January 01</span> </div>
        <div class="text-xl font-bold text-green-600">{{ $product->stock_status }}</div>

        <form>
            <div class="">
            <a href="#" class="block w-full p-2 mt-1 text-sm bg-yellow-300 border border-black cursor-pointer focus:outline-none" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})">
                    Add to Cart
            </a>
        </div>
    </form>
        <a href="#" class="block w-full p-2 mt-2 text-sm bg-yellow-500 border border-black focus:outline-none">Buy Now</a>
    </div>

    </div>

    {{-- popular products --}}
    <div class="p-2 mx-2 bg-white">
        <h2 class="mx-2 mt-4 mb-2 text-lg antialiased font-bold tracking-wide">
            Popular Products
        </h2>

        {{-- carousel 1 --}}
        <div x-data="{swiper: null}"
        x-init="swiper = new Swiper($refs.container, {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 0,

            breakpoints: {
                640: {
                slidesPerView: 1,
                spaceBetween: 0,
                },
                768: {
                slidesPerView: 1,
                spaceBetween: 0,
                },
                1024: {
                slidesPerView: 6,
                spaceBetween: 0,
                },
            },
            })"
        class="relative flex flex-row w-full mx-auto">

        <div class="absolute inset-y-0 left-0 z-10 flex items-center">
            <button @click="swiper.slidePrev()"
                    class="flex items-center justify-center w-16 h-16 ml-2 rounded shadow lg:ml-4 focus:outline-none">
                    <x-heroicon-o-chevron-left  class="ml-1" />
            </button>
        </div>

        <div class="swiper-container" x-ref="container">
            <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="p-4 swiper-slide">
                <div class="flex flex-col overflow-hidden rounded shadow">
                <div class="flex-shrink-0">
                    <img class="object-cover w-full h-48" src="https://images.pexels.com/photos/3184454/pexels-photo-3184454.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="">
                </div>
                </div>
            </div>

            @foreach ($popular_product as $pop_product)
            <div class="p-4 swiper-slide">
                <div class="flex flex-col overflow-hidden rounded shadow">
                <div class="flex-shrink-0">
                    <img class="object-cover w-full h-48" src="{{ asset('assets/images/products/') }}/{{ $pop_product->image }}" alt="">
                </div>
                <h1>{{ $pop_product->name }}</h1>
                </div>
            </div>
            @endforeach

            <div class="p-4 swiper-slide">
                <div class="flex flex-col overflow-hidden rounded shadow">
                <div class="flex-shrink-0">
                    <img class="object-cover w-full h-48" src="https://images.pexels.com/photos/3184454/pexels-photo-3184454.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="">
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="absolute inset-y-0 right-0 z-10 flex items-center">
            <button @click="swiper.slideNext()"
                    class="flex items-center justify-center w-16 h-16 mr-2 rounded shadow lg:mr-4 focus:outline-none">
                <x-heroicon-o-chevron-right class="" />
            </button>
        </div>
    </div>

    {{-- popular products --}}
    <div class="p-2 mx-2 bg-white">
        <h2 class="mx-2 mt-4 mb-2 text-lg antialiased font-bold tracking-wide">
            Related Products
        </h2>

        {{-- carousel 1 --}}
        <div x-data="{swiper: null}"
        x-init="swiper = new Swiper($refs.container, {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 0,

            breakpoints: {
                640: {
                slidesPerView: 1,
                spaceBetween: 0,
                },
                768: {
                slidesPerView: 1,
                spaceBetween: 0,
                },
                1024: {
                slidesPerView: 6,
                spaceBetween: 0,
                },
            },
            })"
        class="relative flex flex-row w-full mx-auto">

        <div class="absolute inset-y-0 left-0 z-10 flex items-center">
            <button @click="swiper.slidePrev()"
                    class="flex items-center justify-center w-16 h-16 ml-2 rounded shadow lg:ml-4 focus:outline-none">
                    <x-heroicon-o-chevron-left  class="ml-1" />
            </button>
        </div>

        <div class="swiper-container" x-ref="container">
            <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="p-4 swiper-slide">
                <div class="flex flex-col overflow-hidden rounded shadow">
                <div class="flex-shrink-0">
                    <img class="object-cover w-full h-48" src="https://images.pexels.com/photos/3184454/pexels-photo-3184454.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="">
                </div>
                </div>
            </div>

            @foreach ($related_products as $related_product)
            <div class="p-4 swiper-slide">
                <div class="flex flex-col overflow-hidden rounded shadow">
                <div class="flex-shrink-0">
                    <img class="object-cover w-full h-48" src="{{ asset('assets/images/products/') }}/{{ $related_product->image }}" alt="">
                </div>
                <h1>{{ $related_product->name }}</h1>
                </div>
            </div>
            @endforeach

            <div class="p-4 swiper-slide">
                <div class="flex flex-col overflow-hidden rounded shadow">
                <div class="flex-shrink-0">
                    <img class="object-cover w-full h-48" src="https://images.pexels.com/photos/3184454/pexels-photo-3184454.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="">
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="absolute inset-y-0 right-0 z-10 flex items-center">
            <button @click="swiper.slideNext()"
                    class="flex items-center justify-center w-16 h-16 mr-2 rounded shadow lg:mr-4 focus:outline-none">
                <x-heroicon-o-chevron-right class="" />
            </button>
        </div>
    </div>

    </div>
